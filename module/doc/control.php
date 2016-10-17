<?php
/**
 * The control file of doc module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     doc
 * @version     $Id: control.php 933 2010-07-06 06:53:40Z wwccss $
 * @link        http://www.zentao.net
 */
class doc extends control
{
    /**
     * Construct function, load user, tree, action auto.
     * 
     * @access public
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('user');
        $this->loadModel('tree');
        $this->loadModel('action');
        $this->loadModel('product');
        $this->loadModel('project');
    }

    /**
     * Go to browse page.
     * 
     * @access public
     * @return void
     */
    public function index()
    {
        $products[] = $this->lang->doc->systemLibs['product'];

        unset($this->lang->doc->menu->index);
        $this->doc->setMenu($products);

        $limit = 6;
        $products   = $this->doc->getLimitLibs('product');
        $projects   = $this->doc->getLimitLibs('project');
        $customLibs = $this->doc->getLimitLibs('custom');
        $subLibs['product'] = $this->doc->getSubLibGroups('product', array_keys($products));
        $subLibs['project'] = $this->doc->getSubLibGroups('project', array_keys($projects));

        $this->view->title      = $this->lang->doc->index;
        $this->view->position[] = $this->lang->doc->index;
        $this->view->products   = $products;
        $this->view->projects   = $projects;
        $this->view->customLibs = $customLibs;
        $this->view->subLibs    = $subLibs;
        $this->display();
    }

    /**
     * Browse docs.
     * 
     * @param  string|int $libID    product|project or the int id of custom library
     * @param  int    $moduleID 
     * @param  int    $productID 
     * @param  int    $projectID 
     * @param  string $orderBy 
     * @param  int    $recTotal 
     * @param  int    $recPerPage 
     * @param  int    $pageID 
     * @access public
     * @return void
     */
    public function browse($libID = 0, $browseType = 'byModule', $param = 0, $orderBy = 'id_desc', $recTotal = 0, $recPerPage = 20, $pageID = 1)
    {
        $this->loadModel('search');

        /* Set browseType.*/ 
        $browseType = strtolower($browseType);
        $queryID    = ($browseType == 'bysearch') ? (int)$param : 0;
        $moduleID   = ($browseType == 'bymodule') ? (int)$param : 0;

        $type = 'custom';
        if($libID)
        {
            $lib = $this->doc->getLibByID($libID);
            if($lib->product or $lib->project) $type = $lib->product ? 'product' : 'project';
        }
        if(empty($libID)) $type = 'product';

        $this->libs = $this->doc->getLibs($type);
        if(empty($libID))
        {
            $libID = key($this->libs);
            $lib = $this->dao->select('*')->from(TABLE_DOCLIB)->where('id')->eq($libID)->orderBy('id')->fetch();
        }

        /* Set menu, save session. */
        $this->doc->setMenu($this->libs, $libID, $type);
        $this->session->set('docList',   $this->app->getURI(true));

        /* Set header and position. */
        $this->view->title      = $this->lang->doc->common . $this->lang->colon . $this->libs[$libID];
        $this->view->position[] = $this->libs[$libID];

        /* Load pager. */
        $this->app->loadClass('pager', $static = true);
        $pager = new pager($recTotal, $recPerPage, $pageID);

        /* Append id for secend sort. */
        $sort = $this->loadModel('common')->appendOrder($orderBy);
 
        /* Get docs by browse type. */
        $docs = $this->doc->getDocsByBrowseType($libID, $browseType, $queryID, $moduleID, $sort, $pager);
       
        /* Build the search form. */
        $actionURL = $this->createLink('doc', 'browse', "lib=$libID&browseType=bySearch&queryID=myQueryID");
        $this->doc->buildSearchForm($libID, $this->libs, $queryID, $actionURL, $type);

        $this->view->libID         = $libID;
        $this->view->libName       = $this->libs[$libID];
        $this->view->moduleID      = $moduleID;
        $this->view->moduleTree    = $this->loadModel('tree')->getTreeMenu($libID, $viewType = 'doc', $startModuleID = 0, array('treeModel', 'createDocLink'));
        $this->view->parentModules = $this->tree->getParents($moduleID);
        $this->view->docs          = $docs;
        $this->view->pager         = $pager;
        $this->view->users         = $this->loadModel('user')->getPairs('noletter');
        $this->view->orderBy       = $orderBy;
        $this->view->browseType    = $browseType;
        $this->view->param         = $param;
        $this->view->type          = $type;

        $this->display();
    }

    /**
     * Create a library.
     * 
     * @access public
     * @return void
     */
    public function createLib()
    {
        if(!empty($_POST))
        {
            $libID = $this->doc->createLib();
            if(!dao::isError())
            {
                $this->loadModel('action')->create('docLib', $libID, 'Created');
                die(js::locate($this->createLink($this->moduleName, 'browse', "libID=$libID"), 'parent.parent'));
            }
            else
            {
                echo js::error(dao::getError());
            }
        }
        $this->view->groups   = $this->loadModel('group')->getPairs();
        $this->view->users    = $this->user->getPairs('nocode');
        $this->view->products = $this->product->getPairs('nocode');
        $this->view->projects = $this->project->getPairs('nocode');
        die($this->display());
    }

    /**
     * Edit a library.
     * 
     * @param  int    $libID 
     * @access public
     * @return void
     */
    public function editLib($libID)
    {
        if(!empty($_POST))
        {
            $changes = $this->doc->updateLib($libID); 
            if(dao::isError()) die(js::error(dao::getError()));
            if($changes)
            {
                $actionID = $this->loadModel('action')->create('docLib', $libID, 'edited');
                $this->action->logHistory($actionID, $changes);
            }
            die(js::locate($this->createLink($this->moduleName, 'browse', "libID=$libID"), 'parent.parent'));
        }
        
        $lib = $this->doc->getLibByID($libID);
        if(!empty($lib->product)) $this->view->product = $this->dao->select('id,name')->from(TABLE_PRODUCT)->where('id')->eq($lib->product)->fetch();
        if(!empty($lib->project)) $this->view->project = $this->dao->select('id,name')->from(TABLE_PROJECT)->where('id')->eq($lib->project)->fetch();
        $this->view->lib     = $lib;
        $this->view->groups  = $this->loadModel('group')->getPairs();
        $this->view->users   = $this->user->getPairs('nocode');
        $this->view->libID   = $libID;
        
        die($this->display());
    }

    /**
     * Delete a library.
     * 
     * @param  int    $libID 
     * @param  string $confirm  yes|no
     * @access public
     * @return void
     */
    public function deleteLib($libID, $confirm = 'no')
    {
        if($libID == 'product' or $libID == 'project') die();
        if($confirm == 'no')
        {
            die(js::confirm($this->lang->doc->confirmDeleteLib, $this->createLink('doc', 'deleteLib', "libID=$libID&confirm=yes")));
        }
        else
        {
            $lib = $this->doc->getLibByID($libID);
            if(!empty($lib->product) or !empty($lib->project))
            {
                $type  = !empty($lib->product) ? 'product' : 'project';
                $count = $this->dao->select('count(*) as count')->from(TABLE_DOCLIB)->where($type)->eq($lib->$type)->fetch('count');
                if($count == 1)die(js::alert($this->lang->doc->errorEmptySysLib));
            }
            $this->doc->delete(TABLE_DOCLIB, $libID);
            die(js::locate($this->createLink('doc', 'browse'), 'parent'));
        }
    }
    
    /**
     * Create a doc.
     * 
     * @param  int|string   $libID 
     * @param  int          $moduleID 
     * @param  int          $productID 
     * @param  int          $projectID 
     * @param  string       $from 
     * @access public
     * @return void
     */
    public function create($libID, $moduleID = 0, $productID = 0, $projectID = 0, $from = 'doc')
    {
        $projectID  = (int)$projectID;
        $lib        = $this->doc->getLibByID($libID);
        $type       = $lib->product ? 'product' : ($lib->project ? 'project' : 'custom');
        $this->libs = $this->doc->getLibs($type);
        if(!empty($_POST))
        {
            $docResult = $this->doc->create();
            if(!$docResult or dao::isError()) die(js::error(dao::getError()));

            $docID = $docResult['id'];
            if($docResult['status'] == 'exists')
            {
                echo js::alert(sprintf($this->lang->duplicate, $this->lang->doc->common));
                die(js::locate($this->createLink('doc', 'view', "docID=$docID"), 'parent'));
            }
            $this->action->create('doc', $docID, 'Created');

            if($from == 'product') $link = $this->createLink('product', 'doc', "productID={$this->post->product}");
            if($from == 'project') $link = $this->createLink('project', 'doc', "projectID={$this->post->project}");
            if($from == 'doc')
            {
                $productID = intval($this->post->product);
                $projectID = intval($this->post->project);
                $vars = "libID=$libID&moduleID={$this->post->module}&productID=$productID&projectID=$projectID";
                $link = $this->createLink('doc', 'browse', $vars);
            }
            die(js::locate($link, 'parent'));
        }

        $this->loadModel('product');
        $this->loadModel('project');

        /* According the from, set menus. */
        if($from == 'product')
        {
            $this->lang->doc->menu      = $this->lang->product->menu;
            $this->lang->doc->menuOrder = $this->lang->product->menuOrder;
            $this->product->setMenu($this->product->getPairs(), $productID);
            $this->lang->set('menugroup.doc', 'product');
        }
        elseif($from == 'project')
        {
            $this->lang->doc->menu      = $this->lang->project->menu;
            $this->lang->doc->menuOrder = $this->lang->project->menuOrder;
            $this->project->setMenu($this->project->getPairs('nocode'), $projectID);
            $this->lang->set('menugroup.doc', 'project');
        }
        else
        {
            $this->doc->setMenu($this->libs, $libID);
        }

        /* Get the modules. */
        if($libID == 'product' or $libID == 'project')
        {
            $moduleOptionMenu = $this->tree->getOptionMenu(0, $libID . 'doc', $startModuleID = 0);
        }
        else
        {
            $moduleOptionMenu = $this->tree->getOptionMenu($libID, 'customdoc', $startModuleID = 0);
        }

        $products = $projectID == 0 ? $this->product->getPairs() : $this->project->getProducts($projectID, false);
        if($libID == 'product' and empty($products))
        {
            echo js::alert($this->lang->doc->errorEmptyProduct);
            die(js::locate('back'));
        }

        $projects = $this->project->getPairs('all');
        if($libID == 'project' and empty($projects))
        {
            echo js::alert($this->lang->doc->errorEmptyProject);
            die(js::locate('back'));
        }

        $this->view->title      = $this->libs[$libID] . $this->lang->colon . $this->lang->doc->create;
        $this->view->position[] = html::a($this->createLink('doc', 'browse', "libID=$libID"), $this->libs[$libID]);
        $this->view->position[] = $this->lang->doc->create;

        $this->view->libID            = $libID;
        $this->view->moduleOptionMenu = $moduleOptionMenu;
        $this->view->moduleID         = $moduleID;
        $this->view->productID        = $productID;
        $this->view->projectID        = $projectID;
        $this->view->products         = $products;
        $this->view->projects         = $projects;

        $this->display();
    }

    /**
     * Edit a doc.
     * 
     * @param  int    $docID 
     * @access public
     * @return void
     */
    public function edit($docID)
    {
        if(!empty($_POST))
        {
            $changes  = $this->doc->update($docID);
            if(dao::isError()) die(js::error(dao::getError()));
            $files = $this->loadModel('file')->saveUpload('doc', $docID);
            if($this->post->comment != '' or !empty($changes) or !empty($files))
            {
                $action = !empty($changes) ? 'Edited' : 'Commented';
                $fileAction = '';
                if(!empty($files)) $fileAction = $this->lang->addFiles . join(',', $files) . "\n" ;
                $actionID = $this->action->create('doc', $docID, $action, $fileAction . $this->post->comment);
                $this->action->logHistory($actionID, $changes);
            }
            die(js::locate($this->createLink('doc', 'view', "docID=$docID"), 'parent'));
        }

        /* Get doc and set menu. */
        $doc = $this->doc->getById($docID);
        $libID = $doc->lib;
        $this->doc->setMenu($this->libs, $libID);

        /* Get modules. */
        if($libID == 'product' or $libID == 'project')
        {
            $moduleOptionMenu = $this->tree->getOptionMenu(0, $libID . 'doc', $startModuleID = 0);
        }
        else
        {
            $moduleOptionMenu = $this->tree->getOptionMenu($libID, 'customdoc', $startModuleID = 0);
        }

        $this->view->title      = $this->libs[$libID] . $this->lang->colon . $this->lang->doc->edit;
        $this->view->position[] = html::a($this->createLink('doc', 'browse', "libID=$libID"), $this->libs[$libID]);
        $this->view->position[] = $this->lang->doc->edit;

        $this->view->doc              = $doc;
        $this->view->libID            = $libID;
        $this->view->libs             = $this->libs;
        $this->view->moduleOptionMenu = $moduleOptionMenu;
        $this->view->products         = $doc->project == 0 ? $this->product->getPairs() : $this->project->getProducts($doc->project, false);
        $this->view->projects         = $this->loadModel('project')->getPairs('all');
        $this->display();
    }

    /**
     * View a doc.
     * 
     * @param  int    $docID 
     * @access public
     * @return void
     */
    public function view($docID)
    {
        /* Get doc. */
        $doc = $this->doc->getById($docID, true);
        if(!$doc) die(js::error($this->lang->notFound) . js::locate('back'));

        /* Check priv when lib is product or project. */
        $systemLib = ($doc->lib == 'project' or $doc->lib == 'product') ? $doc->lib : '';
        if($systemLib and $doc->{$systemLib} and !$this->{$systemLib}->checkPriv($this->{$systemLib}->getById($doc->{$systemLib})))
        {
            echo(js::alert($this->lang->error->accessDenied));
            die(js::locate('back'));
        }

        /* Get library. */
        $lib = $doc->libName;
        if($doc->lib == 'product') $lib = $doc->productName;
        if($doc->lib == 'project') $lib = $doc->productName . $this->lang->arrow . $doc->projectName;

        /* Set menu. */
        $this->doc->setMenu($this->libs, $doc->lib);

        $this->view->title      = "DOC #$doc->id $doc->title - " . $this->libs[$doc->lib];
        $this->view->position[] = html::a($this->createLink('doc', 'browse', "libID=$doc->lib"), $this->libs[$doc->lib]);
        $this->view->position[] = $this->lang->doc->view;

        $this->view->doc        = $doc;
        $this->view->lib        = $lib;
        $this->view->actions    = $this->loadModel('action')->getList('doc', $docID);
        $this->view->users      = $this->user->getPairs('noclosed,noletter');
        $this->view->preAndNext = $this->loadModel('common')->getPreAndNextObject('doc', $docID);
        $this->view->keTableCSS = $this->doc->extractKETableCSS($doc->content);

        $this->display();
    }

    /**
     * Delete a doc.
     * 
     * @param  int    $docID 
     * @param  string $confirm  yes|no
     * @access public
     * @return void
     */
    public function delete($docID, $confirm = 'no')
    {
        if($confirm == 'no')
        {
            die(js::confirm($this->lang->doc->confirmDelete, inlink('delete', "docID=$docID&confirm=yes")));
        }
        else
        {
            $this->doc->delete(TABLE_DOC, $docID);

            /* if ajax request, send result. */
            if($this->server->ajax)
            {
                if(dao::isError())
                {
                    $response['result']  = 'fail';
                    $response['message'] = dao::getError();
                }
                else
                {
                    $response['result']  = 'success';
                    $response['message'] = '';
                }
                $this->send($response);
            }
            die(js::locate($this->session->docList, 'parent'));
        }
    }

    /**
     * Ajax get drop menu.
     * 
     * @param  int    $productID 
     * @param  string $module 
     * @param  string $method 
     * @param  string $extra 
     * @access public
     * @return void
     */
    public function ajaxGetDropMenu($libID, $module, $method, $extra)
    {
        $this->view->link   = $this->doc->getDocLink($module, $method, $extra);
        $this->view->libID  = $libID;
        $this->view->module = $module;
        $this->view->method = $method;
        $this->view->extra  = $extra;
        $this->view->libs   = $this->doc->getLibs($extra);

        $this->display();
    }

    /**
     * The results page of search.
     * 
     * @param  string  $keywords 
     * @param  string  $module 
     * @param  string  $method 
     * @param  mix     $extra 
     * @access public
     * @return void
     */
    public function ajaxGetMatchedItems($keywords, $module, $method, $extra)
    {
        $libs = $this->dao->select('*')->from(TABLE_DOCLIB)->where('deleted')->eq(0)
            ->andWhere('name')->like("%$keywords%")
            ->beginIF($extra == 'product' or $extra == 'project')->andWhere($extra)->ne(0)->fi()
            ->orderBy('`id` desc')
            ->fetchAll();
        foreach($libs as $key => $lib)
        {
            if(!$this->doc->checkPriv($lib)) unset($libs[$key]);
        }

        $this->view->link     = $this->doc->getDocLink($module, $method, $extra);
        $this->view->libs     = $libs;
        $this->view->keywords = $keywords;
        $this->display();
    }

    /**
     * Show all libs by type.
     * 
     * @param  string $type 
     * @param  string $extra 
     * @param  int    $recTotal 
     * @param  int    $recPerPage 
     * @param  int    $pageID 
     * @access public
     * @return void
     */
    public function allLibs($type, $extra = '', $recTotal = 0, $recPerPage = 20, $pageID = 1)
    {
        $libName = isset($this->lang->doc->systemLibs[$type]) ? $this->lang->doc->systemLibs[$type] : $this->lang->doc->custom;
        $this->doc->setMenu(array($libName), 0, $type);

        $this->view->title      = $libName;
        $this->view->position[] = $libName;

        /* Load pager. */
        $this->app->loadClass('pager', $static = true);
        $pager = new pager($recTotal, $recPerPage, $pageID);

        $libs    = $this->doc->getAllLibs($type, $pager, $extra);
        $subLibs = array();
        if($type == 'product' or $type == 'project') $subLibs = $this->doc->getSubLibGroups($type, array_keys($libs), $limit = 0);

        $this->view->type    = $type;
        $this->view->libs    = $libs;
        $this->view->subLibs = $subLibs;
        $this->view->pager   = $pager;
        $this->display();
    }

    /**
     * Show libs for product or project
     * 
     * @param  string $type 
     * @param  int    $objectID 
     * @access public
     * @return void
     */
    public function showLibs($type, $objectID)
    {
        $table  = $type == 'product' ? TABLE_PRODUCT : TABLE_PROJECT;
        $object = $this->dao->select('id,name')->from($table)->where('id')->eq($objectID)->fetch();
        $this->doc->setMenu(array($object->name), 0, $type);

        $this->view->title      = $object->name;
        $this->view->position[] = $object->name;

        $this->view->type   = $type;
        $this->view->object = $object;
        $this->view->libs   = $this->doc->getLibsByObject($type, $objectID);
        $this->display();
    }
}
