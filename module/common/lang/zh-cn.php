<?php
/**
 * The common simplified chinese file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     ZenTaoPMS
 * @version     $Id: zh-cn.php 5116 2013-07-12 06:37:48Z chencongzhi520@gmail.com $
 * @link        http://www.zentao.net
 */
$lang->arrow     = '&nbsp;<i class="icon-angle-right"></i>&nbsp;';
$lang->colon     = '-';
$lang->comma     = '，';
$lang->dot       = '。';
$lang->at        = ' 于 ';
$lang->downArrow = '↓';
$lang->null      = '空';
$lang->ellipsis  = '…';
$lang->percent   = '%';
$lang->dash      = '-';

$lang->zentaoPMS        = '禅道';
$lang->logoImg          = 'zt-logo.png';
$lang->welcome          = "%s项目管理系统";
$lang->logout           = '退出';
$lang->login            = '登录';
$lang->help             = '帮助';
$lang->aboutZenTao      = '关于禅道';
$lang->profile          = '个人档案';
$lang->changePassword   = '更改密码';
$lang->runInfo          = "<div class='row'><div class='u-1 a-center' id='debugbar'>时间: %s 毫秒, 内存: %s KB, 查询: %s.  </div></div>";
$lang->agreement        = "已阅读并同意<a href='http://zpl.pub/page/zplv12.html' target='_blank'>《Z PUBLIC LICENSE授权协议1.2》</a>。<span class='text-danger'>未经许可，不得去除、隐藏或遮掩禅道软件的任何标志及链接。</span>";
$lang->designedByAIUX   = "<a href='https://api.zentao.net/goto.php?item=aiux' class='link-aiux' target='_blank'>Designed by <strong>艾体验</strong></a>";

$lang->reset        = '重填';
$lang->cancel       = '取消';
$lang->refresh      = '刷新';
$lang->edit         = '编辑';
$lang->delete       = '删除';
$lang->close        = '关闭';
$lang->unlink       = '移除';
$lang->import       = '导入';
$lang->export       = '导出';
$lang->setFileName  = '文件名：';
$lang->submitting   = '稍候...';
$lang->save         = '保存';
$lang->saveSuccess  = '保存成功';
$lang->confirm      = '确认';
$lang->preview      = '查看';
$lang->goback       = '返回';
$lang->goPC         = 'PC版';
$lang->more         = '更多';
$lang->day          = '天';
$lang->customConfig = '自定义';
$lang->public       = '公共';
$lang->trunk        = '主干';
$lang->sort         = '排序';
$lang->required     = '必填';
$lang->noData       = '暂无';
$lang->fullscreen   = '全屏';
$lang->retrack      = '收起';
$lang->recent       = '近期';
$lang->whitelist    = '访问白名单';

$lang->actions         = '操作';
$lang->restore         = '恢复默认';
$lang->comment         = '备注';
$lang->history         = '历史记录';
$lang->attatch         = '附件';
$lang->reverse         = '切换顺序';
$lang->switchDisplay   = '切换显示';
$lang->expand          = '展开全部';
$lang->collapse        = '收起';
$lang->saveSuccess     = '保存成功';
$lang->fail            = '失败';
$lang->addFiles        = '上传了附件 ';
$lang->files           = '附件 ';
$lang->pasteText       = '多项录入';
$lang->uploadImages    = '多图上传 ';
$lang->timeout         = '连接超时，请检查网络环境，或重试！';
$lang->repairTable     = '数据库表可能损坏，请用phpmyadmin或myisamchk检查修复。';
$lang->duplicate       = '已有相同标题的%s';
$lang->ipLimited       = "<html><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head><body>抱歉，管理员限制当前IP登录，请联系管理员解除限制。</body></html>";
$lang->unfold          = '+';
$lang->fold            = '-';
$lang->homepage        = '设为模块首页';
$lang->noviceTutorial  = '新手教程';
$lang->changeLog       = '修改日志';
$lang->manual          = '手册';
$lang->customMenu      = '自定义导航';
$lang->customField     = '自定义表单项';
$lang->lineNumber      = '行号';
$lang->tutorialConfirm = '检测到你尚未退出新手教程模式，是否现在退出？';

$lang->preShortcutKey  = '[快捷键:←]';
$lang->nextShortcutKey = '[快捷键:→]';
$lang->backShortcutKey = '[快捷键:Alt+↑]';

$lang->select        = '选择';
$lang->selectAll     = '全选';
$lang->selectReverse = '反选';
$lang->loading       = '稍候...';
$lang->notFound      = '抱歉，您访问的对象并不存在！';
$lang->notPage       =  '抱歉，您访问的功能正在开发中！';
$lang->showAll       = '[[全部显示]]';
$lang->selectedItems = '已选择 <strong>{0}</strong> 项';

$lang->future      = '未来';
$lang->year        = '年';
$lang->workingHour = '工时';

$lang->generalUR = '用需/史诗';
$lang->generalSR = '软需/故事';
$lang->executionCommon = '执行';
$lang->sprintCommon    = '迭代/阶段';

$lang->idAB         = 'ID';
$lang->priAB        = 'P';
$lang->statusAB     = '状态';
$lang->openedByAB   = '创建';
$lang->assignedToAB = '指派';
$lang->typeAB       = '类型';

$lang->common = new stdclass();
$lang->common->common = '公有模块';

/* 主导航菜单。*/
$lang->mainNav = new stdclass();
$lang->mainNav->my      = '<i class="icon icon-menu-my"></i> 地盘|my|index|';
$lang->mainNav->program = '<i class="icon icon-folder-open-o"></i> 项目集|program|pgmbrowse|';
$lang->mainNav->product = '<i class="icon icon-menu-project"></i> 产品|product|index|';
$lang->mainNav->project = '<i class="icon icon-file"></i> 项目|program|prjbrowse|';
$lang->mainNav->system  = '<i class="icon icon-menu-users"></i> 组织|subject|browse|';
$lang->mainNav->admin   = '<i class="icon icon-menu-backend"></i> 后台|admin|index|';

$lang->reporting = new stdclass();
$lang->dividerMenu = ',admin,';

/* Program set menu. */
$lang->program = new stdclass();
$lang->program->menu = new stdclass();
//$lang->program->menu->index   = '主页|program|pgmindex|';
$lang->program->menu->browse  = array('link' => '项目集|program|pgmbrowse|', 'alias' => 'pgmcreate,pgmedit,pgmgroup,pgmmanagepriv,pgmmanageview,pgmmanagemembers');

$lang->program->viewMenu = new stdclass();
$lang->program->viewMenu->product     = array('link' => '产品|program|pgmproduct|program=%s', 'alias' => 'view');
$lang->program->viewMenu->project     = array('link' => "项目|program|pgmproject|program=%s");
$lang->program->viewMenu->personnel   = array('link' => "人员|personnel|accessible|program=%s");
$lang->program->viewMenu->stakeholder = array('link' => "干系人|program|pgmstakeholder|program=%s", 'alias' => 'createstakeholder');

$lang->personnel = new stdClass();
$lang->personnel->menu = new stdClass();
$lang->personnel->menu->accessible = array('link' => "可访问人员|personnel|accessible|program=%s");
$lang->personnel->menu->whitelist  = array('link' => "白名单|personnel|whitelist|program=%s", 'alias' => 'addwhitelist');
$lang->personnel->menu->putinto    = array('link' => "投入人员|personnel|putinto|program=%s");

/* Scrum menu. */
$lang->product = new stdclass();
$lang->product->menu = new stdclass();
$lang->product->menu->home = '主页|product|index|';
$lang->product->menu->list = array('link' => $lang->productCommon . '|product|all|', 'alias' => 'create,batchedit');

$lang->product->viewMenu = new stdclass();
$lang->product->viewMenu->requirement = array('link' => "$lang->productURCommon|product|browse|productID=%s&branch=&browseType=unclosed&param=0&storyType=requirement", 'alias' => 'batchedit', 'subModule' => 'story');
$lang->product->viewMenu->story       = array('link' => "$lang->productSRCommon|product|browse|productID=%s", 'alias' => 'batchedit', 'subModule' => 'story');
$lang->product->viewMenu->track       = array('link' => "跟踪矩阵|story|track|productID=%s");
$lang->product->viewMenu->plan        = array('link' => "计划|productplan|browse|productID=%s", 'subModule' => 'productplan');
$lang->product->viewMenu->release     = array('link' => '发布|release|browse|productID=%s',     'subModule' => 'release');
$lang->product->viewMenu->roadmap     = '路线图|product|roadmap|productID=%s';
$lang->product->viewMenu->branch      = '@branch@|branch|manage|productID=%s';
$lang->product->viewMenu->dynamic     = '动态|product|dynamic|productID=%s';
$lang->product->viewMenu->module      = '模块|tree|browse|productID=%s&view=story';
$lang->product->viewMenu->view        = array('link' => '概况|product|view|productID=%s', 'alias' => 'edit');
$lang->product->viewMenu->whitelist   = array('link' => '白名单|product|whitelist|productID=%s', 'alias' => 'addwhitelist');

$lang->release     = new stdclass();
$lang->branch      = new stdclass();
$lang->productplan = new stdclass();

$lang->release->menu     = $lang->product->viewMenu;
$lang->branch->menu      = $lang->product->menu;
$lang->productplan->menu = $lang->product->menu;

/* System menu. */
$lang->system = new stdclass();
$lang->system->menu = new stdclass();
$lang->system->menu->company   = array('link' => '全局设置|subject|browse|', 'subModule' => 'holiday');
$lang->system->menu->scrum     = array('link' => '敏捷模型|custom|configurescrum|');
$lang->system->menu->waterfall = array('link' => '瀑布模型|custom|estimate|', 'subModule' => 'stage');

$lang->subject = new stdclass();
$lang->subject->menu = new stdclass();
$lang->subject->menu->subject = array('link' => '科目|subject|browse|');
$lang->subject->menu->holiday = array('link' => '节假日|holiday|browse|');
$lang->subject->menu->concept = array('link' => '需求概念|custom|browsestoryconcept|');

$lang->holiday = new stdclass();
$lang->holiday->menu = $lang->subject->menu;

$lang->stage = new stdclass();
$lang->stage->menu = new stdclass();
$lang->stage->menu->estimate = array('link' => '估算|custom|estimate');
$lang->stage->menu->stage    = array('link' => '阶段|stage|settype', 'subModule' => 'stage');

$lang->measurement = new stdclass();
$lang->measurement->menu = new stdclass();

/* 查询条中可以选择的对象列表。*/
$lang->searchObjects['bug']         = 'Bug';
$lang->searchObjects['story']       = "{$lang->productSRCommon}";
$lang->searchObjects['task']        = '任务';
$lang->searchObjects['testcase']    = '用例';
$lang->searchObjects['product']     = $lang->productCommon;
$lang->searchObjects['build']       = '版本';
$lang->searchObjects['release']     = '发布';
$lang->searchObjects['productplan'] = $lang->productCommon . '计划';
$lang->searchObjects['testtask']    = '测试单';
$lang->searchObjects['doc']         = '文档';
$lang->searchObjects['caselib']     = '用例库';
$lang->searchObjects['testreport']  = '测试报告';
$lang->searchObjects['program']     = '项目集';
$lang->searchObjects['project']     = '项目';
$lang->searchObjects['execution']   = '迭代/阶段';
$lang->searchTips                   = '编号(ctrl+g)';

/* 导入支持的编码格式。*/
$lang->importEncodeList['gbk']   = 'GBK';
$lang->importEncodeList['big5']  = 'BIG5';
$lang->importEncodeList['utf-8'] = 'UTF-8';

/* 导出文件的类型列表。*/
$lang->exportFileTypeList['csv']  = 'csv';
$lang->exportFileTypeList['xml']  = 'xml';
$lang->exportFileTypeList['html'] = 'html';

$lang->exportTypeList['all']      = '全部记录';
$lang->exportTypeList['selected'] = '选中记录';

/* 语言 */
$lang->lang = 'Language';

/* 风格列表。*/
$lang->theme                = '主题';
$lang->themes['default']    = '禅道蓝（默认）';
$lang->themes['green']      = '叶兰绿';
$lang->themes['red']        = '赤诚红';
$lang->themes['purple']     = '玉烟紫';
$lang->themes['pink']       = '芙蕖粉';
$lang->themes['blackberry'] = '露莓黑';
$lang->themes['classic']    = '经典蓝';

/* 首页菜单设置。*/
$lang->index = new stdclass();
$lang->index->menu = new stdclass();

$lang->index->menu->product = "浏览{$lang->productCommon}|product|browse";
$lang->index->menu->project = "浏览{$lang->projectCommon}|project|browse";

/* 我的地盘菜单设置。*/
$lang->my = new stdclass();
$lang->my->menu = new stdclass();

$lang->my->menu->index       = '首页|my|index';
$lang->my->menu->calendar    = array('link' => '日程|my|calendar|', 'subModule' => 'todo', 'alias' => 'todo');
$lang->my->menu->myProject   = array('link' => '项目|my|project|');
$lang->my->menu->task        = array('link' => '任务|my|task|', 'subModule' => 'task');
$lang->my->menu->bug         = array('link' => 'Bug|my|bug|', 'subModule' => 'bug');
$lang->my->menu->testtask    = array('link' => '测试|my|testtask|', 'subModule' => 'testcase,testtask', 'alias' => 'testcase');
$lang->my->menu->story       = array('link' => "需求|my|story|", 'subModule' => 'story');
$lang->my->menu->myExecution = "{$lang->executionCommon}|my|execution|";
$lang->my->menu->dynamic     = '动态|my|dynamic|';
$lang->my->menu->profile     = array('link' => '档案|my|profile|', 'alias' => 'editprofile');
$lang->my->menu->contacts    = '联系人|my|managecontacts|';

$lang->my->dividerMenu = ',program,requirement,dynamic,';

$lang->todo       = new stdclass();
$lang->todo->menu = $lang->my->menu;

/* 产品视图设置。*/
$lang->scrumproduct = new stdclass();
$lang->scrumproduct->menu = new stdclass();

$lang->scrumproduct->menu->story   = array('link' => "{$lang->projectSRCommon}|product|browse|productID=%s", 'alias' => 'batchedit', 'subModule' => 'story');
$lang->scrumproduct->menu->plan    = array('link' => "计划|productplan|browse|productID=%s", 'subModule' => 'productplan');
//$lang->scrumproduct->menu->release = array('link' => '发布|release|browse|productID=%s',     'subModule' => 'release');
$lang->scrumproduct->menu->roadmap = '路线图|product|roadmap|productID=%s';
$lang->scrumproduct->menu->project = "{$lang->projectCommon}|product|project|status=all&productID=%s";
$lang->scrumproduct->menu->dynamic = '动态|product|dynamic|productID=%s';
$lang->scrumproduct->menu->doc     = array('link' => '文档|doc|objectLibs|type=product&objectID=%s&from=product', 'subModule' => 'doc');
$lang->scrumproduct->menu->branch  = '@branch@|branch|manage|productID=%s';
$lang->scrumproduct->menu->module  = '模块|tree|browse|productID=%s&view=story';
$lang->scrumproduct->menu->view    = array('link' => '概况|product|view|productID=%s', 'alias' => 'edit');

$lang->scrumproduct->menu->requirement = array('link' => "{$lang->projectURCommon}|product|browse|productID=%s&branch=&browseType=unclosed&param=0&storyType=requirement", 'alias' => 'batchedit', 'subModule' => 'story');
$lang->scrumproduct->menu->story       = array('link' => "{$lang->projectSRCommon}|product|browse|productID=%s", 'alias' => 'batchedit', 'subModule' => 'story');

$lang->product->dividerMenu = ',project,doc,';

$lang->story = new stdclass();

$lang->story->menu = $lang->product->menu;

/* 项目视图菜单设置。*/
$lang->project = new stdclass();
$lang->project->menu = new stdclass();

$lang->project->menu->task      = array('link' => '任务|project|task|projectID=%s', 'subModule' => 'task,tree', 'alias' => 'importtask,importbug');
$lang->project->menu->kanban    = array('link' => '看板|project|kanban|projectID=%s');
$lang->project->menu->burn      = array('link' => '燃尽图|project|burn|projectID=%s');
$lang->project->menu->list      = array('link' => '更多|project|grouptask|projectID=%s', 'alias' => 'grouptask,tree', 'class' => 'dropdown dropdown-hover');
$lang->project->menu->story     = array('link' => "{$lang->projectSRCommon}|project|story|projectID=%s", 'subModule' => 'story', 'alias' => 'linkstory,storykanban');
$lang->project->menu->qa        = array('link' => '测试|project|bug|projectID=%s', 'subModule' => 'bug,build,testtask', 'alias' => 'build,testtask', 'class' => 'dropdown dropdown-hover');
$lang->project->menu->doc       = array('link' => '文档|doc|objectLibs|type=project&objectID=%s&from=project', 'subModule' => 'doc');
$lang->project->menu->action    = array('link' => '动态|project|dynamic|projectID=%s', 'subModule' => 'dynamic', 'class' => 'dropdown dropdown-hover');
$lang->project->menu->product   = $lang->productCommon . '|project|manageproducts|projectID=%s';
$lang->project->menu->team      = array('link' => '团队|project|team|projectID=%s', 'alias' => 'managemembers');
$lang->project->menu->view      = array('link' => '概况|project|view|projectID=%s', 'alias' => 'edit,start,suspend,putoff,close');
$lang->project->menu->whitelist = array('link' => '白名单|project|whitelist|projectID=%s', 'alias' => 'addwhitelist', 'subModule' => 'personnel');

$lang->project->subMenu = new stdclass();
$lang->project->subMenu->list = new stdclass();
$lang->project->subMenu->list->groupTask = '分组视图|project|groupTask|projectID=%s';
$lang->project->subMenu->list->tree      = '树状图|project|tree|projectID=%s';

$lang->project->subMenu->qa = new stdclass();
$lang->project->subMenu->qa->bug      = 'Bug|project|bug|projectID=%s';
$lang->project->subMenu->qa->build    = array('link' => '版本|project|build|projectID=%s', 'subModule' => 'build');
$lang->project->subMenu->qa->testtask = array('link' => '测试单|project|testtask|projectID=%s', 'subModule' => 'testreport,testtask');

$lang->project->dividerMenu = ',projectstory,issue,story,team,product,';

$lang->task  = new stdclass();
$lang->build = new stdclass();
$lang->task->menu  = $lang->project->menu;
$lang->build->menu = $lang->project->menu;

/* QA视图菜单设置。*/
$lang->qa = new stdclass();
$lang->qa->menu = new stdclass();

$lang->qa->menu->bug       = array('link' => 'Bug|bug|browse|productID=%s', 'alias' => 'view,create,batchcreate,edit,resolve,close,activate,report,batchedit,batchactivate,confirmbug,assignto');
$lang->qa->menu->testcase  = array('link' => '用例|testcase|browse|productID=%s', 'alias' => 'view,create,batchcreate,edit,batchedit,showimport,groupcase,importfromlib', 'class' => 'dropdown dropdown-hover');
$lang->qa->menu->testtask  = array('link' => '测试单|testtask|browse|productID=%s', 'alias' => 'view,create,edit,linkcase,cases,start,close,batchrun,groupcase,report');
$lang->qa->menu->testsuite = array('link' => '套件|testsuite|browse|productID=%s', 'alias' => 'view,create,edit,linkcase');
$lang->qa->menu->report    = array('link' => '报告|testreport|browse|productID=%s', 'alias' => 'view,create,edit');
$lang->qa->menu->caselib   = array('link' => '用例库|caselib|browse', 'alias' => 'create,createcase,view,edit,batchcreatecase,showimport');

$lang->qa->subMenu = new stdclass();
$lang->qa->subMenu->testcase = new stdclass();
$lang->qa->subMenu->testcase->feature = array('link' => '功能测试|testcase|browse|productID=%s', 'alias' => 'view,create,batchcreate,edit,batchedit,showimport,groupcase,importfromlib', 'subModule' => 'tree,story');
$lang->qa->subMenu->testcase->unit    = array('link' => '单元测试|testtask|browseUnits|productID=%s');

$lang->bug = new stdclass();
$lang->bug->menu = new stdclass();
$lang->bug->subMenu = $lang->qa->subMenu;

$lang->bug->menu->bug       = array('link' => 'Bug|bug|browse|productID=%s', 'alias' => 'view,create,batchcreate,edit,resolve,close,activate,report,batchedit,batchactivate,confirmbug,assignto', 'subModule' => 'tree');
$lang->bug->menu->testcase  = array('link' => '用例|testcase|browse|productID=%s', 'class' => 'dropdown dropdown-hover');
$lang->bug->menu->testtask  = array('link' => '测试单|testtask|browse|productID=%s');
$lang->bug->menu->testsuite = array('link' => '套件|testsuite|browse|productID=%s');
$lang->bug->menu->report    = array('link' => '报告|testreport|browse|productID=%s');
$lang->bug->menu->caselib   = array('link' => '用例库|caselib|browse');

$lang->testcase = new stdclass();
$lang->testcase->menu = new stdclass();
$lang->testcase->subMenu = $lang->qa->subMenu;
$lang->testcase->menu->bug       = array('link' => 'Bug|bug|browse|productID=%s');
$lang->testcase->menu->testcase  = array('link' => '用例|testcase|browse|productID=%s', 'alias' => 'view,create,batchcreate,edit,batchedit,showimport,groupcase,importfromlib', 'subModule' => 'tree,story', 'class' => 'dropdown dropdown-hover');
$lang->testcase->menu->testtask  = array('link' => '测试单|testtask|browse|productID=%s');
$lang->testcase->menu->testsuite = array('link' => '套件|testsuite|browse|productID=%s');
$lang->testcase->menu->report    = array('link' => '报告|testreport|browse|productID=%s');
$lang->testcase->menu->caselib   = array('link' => '用例库|caselib|browse');

$lang->testtask = new stdclass();
$lang->testtask->menu = new stdclass();
$lang->testtask->subMenu = $lang->qa->subMenu;
$lang->testtask->menu->bug       = array('link' => 'Bug|bug|browse|productID=%s');
$lang->testtask->menu->testcase  = array('link' => '用例|testcase|browse|productID=%s', 'class' => 'dropdown dropdown-hover');
$lang->testtask->menu->testtask  = array('link' => '测试单|testtask|browse|productID=%s', 'subModule' => 'testtask', 'alias' => 'view,create,edit,linkcase,cases,start,close,batchrun,groupcase,report');
$lang->testtask->menu->testsuite = array('link' => '套件|testsuite|browse|productID=%s');
$lang->testtask->menu->report    = array('link' => '报告|testreport|browse|productID=%s');
$lang->testtask->menu->caselib   = array('link' => '用例库|caselib|browse');

$lang->testsuite = new stdclass();
$lang->testsuite->menu = new stdclass();
$lang->testsuite->subMenu = $lang->qa->subMenu;
$lang->testsuite->menu->bug       = array('link' => 'Bug|bug|browse|productID=%s');
$lang->testsuite->menu->testcase  = array('link' => '用例|testcase|browse|productID=%s', 'class' => 'dropdown dropdown-hover');
$lang->testsuite->menu->testtask  = array('link' => '测试单|testtask|browse|productID=%s');
$lang->testsuite->menu->testsuite = array('link' => '套件|testsuite|browse|productID=%s', 'alias' => 'view,create,edit,linkcase');
$lang->testsuite->menu->report    = array('link' => '报告|testreport|browse|productID=%s');
$lang->testsuite->menu->caselib   = array('link' => '用例库|caselib|browse');

$lang->testreport = new stdclass();
$lang->testreport->menu = new stdclass();
$lang->testreport->subMenu = $lang->qa->subMenu;
$lang->testreport->menu->bug       = array('link' => 'Bug|bug|browse|productID=%s');
$lang->testreport->menu->testcase  = array('link' => '用例|testcase|browse|productID=%s', 'class' => 'dropdown dropdown-hover');
$lang->testreport->menu->testtask  = array('link' => '测试单|testtask|browse|productID=%s');
$lang->testreport->menu->testsuite = array('link' => '套件|testsuite|browse|productID=%s');
$lang->testreport->menu->report    = array('link' => '报告|testreport|browse|productID=%s', 'alias' => 'view,create,edit');
$lang->testreport->menu->caselib   = array('link' => '用例库|caselib|browse');

$lang->caselib = new stdclass();
$lang->caselib->menu = new stdclass();
$lang->caselib->menu->bug       = array('link' => 'Bug|bug|browse|');
$lang->caselib->menu->testcase  = array('link' => '用例|testcase|browse|', 'class' => 'dropdown dropdown-hover');
$lang->caselib->menu->testtask  = array('link' => '测试单|testtask|browse|');
$lang->caselib->menu->testsuite = array('link' => '套件|testsuite|browse|');
$lang->caselib->menu->report    = array('link' => '报告|testreport|browse|');
$lang->caselib->menu->caselib   = array('link' => '用例库|caselib|browse|libID=%s', 'alias' => 'create,createcase,view,edit,batchcreatecase,showimport', 'subModule' => 'tree,testcase');

$lang->caselib->subMenu = new stdclass();
$lang->caselib->subMenu->testcase = new stdclass();
$lang->caselib->subMenu->testcase->feature = array('link' => '功能测试|testcase|browse|', 'alias' => 'view,create,batchcreate,edit,batchedit,showimport,groupcase,importfromlib', 'subModule' => 'tree,story');
$lang->caselib->subMenu->testcase->unit    = array('link' => '单元测试|testtask|browseUnits|');

$lang->ci = new stdclass();
$lang->ci->menu = new stdclass();
$lang->ci->menu->code     = array('link' => '代码|repo|browse|repoID=%s', 'alias' => 'diff,view,revision,log,blame,showsynccomment');
$lang->ci->menu->build    = array('link' => '构建|job|browse', 'subModule' => 'compile,job');
$lang->ci->menu->jenkins  = array('link' => 'Jenkins|jenkins|browse', 'alias' => 'create,edit');
$lang->ci->menu->maintain = array('link' => '版本库|repo|maintain', 'alias' => 'create,edit');
$lang->ci->menu->rules    = array('link' => '指令|repo|setrules');

$lang->repo          = new stdclass();
$lang->jenkins       = new stdclass();
$lang->compile       = new stdclass();
$lang->job           = new stdclass();
$lang->repo->menu    = $lang->ci->menu;
$lang->jenkins->menu = $lang->ci->menu;
$lang->compile->menu = $lang->ci->menu;
$lang->job->menu     = $lang->ci->menu;

/* 文档视图菜单设置。*/
$lang->doc = new stdclass();
$lang->doc->menu = new stdclass();

$lang->svn = new stdclass();
$lang->git = new stdclass();

/* 发布视图菜单设置。*/
$lang->projectrelease = new stdclass();
$lang->projectrelease->menu = new stdclass();

/* 统计视图菜单设置。*/
$lang->report = new stdclass();
$lang->report->menu = new stdclass();

$lang->report->menu->annual  = array('link' => '年度总结|report|annualData', 'target' => '_blank');
$lang->report->menu->product = array('link' => $lang->productCommon . '|report|productsummary');
$lang->report->menu->prj     = array('link' => $lang->projectCommon . '|report|projectdeviation');
$lang->report->menu->test    = array('link' => '测试|report|bugcreate', 'alias' => 'bugassign');
$lang->report->menu->staff   = array('link' => '组织|report|workload');

$lang->report->notice = new stdclass();
$lang->report->notice->help = '注：统计报表的数据来源于列表页面的检索结果，生成统计报表前请先在列表页面进行检索。比如列表页面我们检索的是%tab%，那么报表就是基于之前检索的%tab%的结果集进行统计。';

/* 组织结构视图菜单设置。*/
$lang->company = new stdclass();
$lang->dept    = new stdclass();
$lang->group   = new stdclass();
$lang->user    = new stdclass();
$lang->company->menu = new stdclass();
$lang->dept->menu    = new stdclass();
$lang->group->menu   = new stdclass();
$lang->user->menu    = new stdclass();

$lang->company = new stdclass();
$lang->company->menu = new stdclass();
$lang->company->menu->browseUser  = array('link' => '用户|company|browse', 'subModule' => ',user,');
$lang->company->menu->dept        = array('link' => '部门|dept|browse', 'subModule' => 'dept');
$lang->company->menu->browseGroup = array('link' => '权限|group|browse', 'subModule' => 'group');
$lang->company->menu->dynamic     = '动态|company|dynamic|';
$lang->company->menu->view        = array('link' => '公司|company|view');

/* 后台管理菜单设置。*/
$lang->admin = new stdclass();
$lang->admin->menu = new stdclass();
$lang->admin->menu->index   = array('link' => '首页|admin|index', 'alias' => 'register,certifytemail,certifyztmobile,ztcompany');
$lang->admin->menu->company = array('link' => '人员|company|browse|', 'subModule' => ',user,dept,group,', 'alias' => ',dynamic,view,');
$lang->admin->menu->message = array('link' => '通知|message|index', 'subModule' => 'message,mail,webhook');
$lang->admin->menu->custom  = array('link' => '自定义|custom|index', 'subModule' => 'custom');
$lang->admin->menu->data    = array('link' => '数据|backup|index', 'subModule' => 'backup,action');
$lang->admin->menu->safe    = array('link' => '安全|admin|safe', 'alias' => 'checkweak');
$lang->admin->menu->system  = array('link' => '系统|cron|index', 'subModule' => 'cron');

$lang->company->menu = $lang->company->menu;
$lang->dept->menu    = $lang->company->menu;
$lang->group->menu   = $lang->company->menu;
$lang->user->menu    = $lang->company->menu;

$lang->admin->subMenu = new stdclass();
$lang->admin->subMenu->message = new stdclass();
$lang->admin->subMenu->message->mail    = array('link' => '邮件|mail|index', 'subModule' => 'mail');
$lang->admin->subMenu->message->webhook = array('link' => 'Webhook|webhook|browse', 'subModule' => 'webhook');
$lang->admin->subMenu->message->browser = array('link' => '浏览器|message|browser');
$lang->admin->subMenu->message->setting = array('link' => '设置|message|setting');

$lang->admin->subMenu->sso = new stdclass();
$lang->admin->subMenu->sso->ranzhi = 'ZDOO|admin|sso';

$lang->admin->subMenu->dev = new stdclass();
$lang->admin->subMenu->dev->api    = array('link' => 'API|dev|api');
$lang->admin->subMenu->dev->db     = array('link' => '数据库|dev|db');
$lang->admin->subMenu->dev->editor = array('link' => '编辑器|dev|editor');
$lang->admin->subMenu->dev->entry  = array('link' => '应用|entry|browse', 'subModule' => 'entry');

$lang->admin->subMenu->data = new stdclass();
$lang->admin->subMenu->data->backup = array('link' => '备份|backup|index', 'subModule' => 'backup');
$lang->admin->subMenu->data->trash  = '回收站|action|trash';

$lang->admin->subMenu->system = new stdclass();
$lang->admin->subMenu->system->cron     = array('link' => '定时|cron|index', 'subModule' => 'cron');
$lang->admin->subMenu->system->timezone = array('link' => '时区|custom|timezone', 'subModule' => 'custom');

$lang->convert   = new stdclass();
$lang->upgrade   = new stdclass();
$lang->action    = new stdclass();
$lang->backup    = new stdclass();
$lang->extension = new stdclass();
$lang->custom    = new stdclass();
$lang->mail      = new stdclass();
$lang->cron      = new stdclass();
$lang->dev       = new stdclass();
$lang->entry     = new stdclass();
$lang->webhook   = new stdclass();
$lang->message   = new stdclass();
$lang->search    = new stdclass();

/* 菜单分组。*/
$lang->menugroup = new stdclass();
$lang->menugroup->release     = 'product';
$lang->menugroup->story       = 'product';
$lang->menugroup->branch      = 'product';
$lang->menugroup->productplan = 'product';
$lang->menugroup->task        = 'project';
$lang->menugroup->build       = 'project';
$lang->menugroup->convert     = 'admin';
$lang->menugroup->upgrade     = 'admin';
$lang->menugroup->user        = 'company';
$lang->menugroup->group       = 'company';
$lang->menugroup->bug         = 'qa';
$lang->menugroup->testcase    = 'qa';
$lang->menugroup->case        = 'qa';
$lang->menugroup->testtask    = 'qa';
$lang->menugroup->testsuite   = 'qa';
$lang->menugroup->caselib     = 'qa';
$lang->menugroup->testreport  = 'qa';
$lang->menugroup->report      = 'reporting';
$lang->menugroup->people      = 'admin';
$lang->menugroup->dept        = 'company';
$lang->menugroup->todo        = 'my';
$lang->menugroup->score       = 'my';
$lang->menugroup->action      = 'admin';
$lang->menugroup->backup      = 'admin';
$lang->menugroup->cron        = 'admin';
$lang->menugroup->extension   = 'admin';
$lang->menugroup->custom      = 'admin';
$lang->menugroup->mail        = 'admin';
$lang->menugroup->dev         = 'admin';
$lang->menugroup->entry       = 'admin';
$lang->menugroup->webhook     = 'admin';
$lang->menugroup->message     = 'admin';

$lang->menugroup->repo    = 'ci';
$lang->menugroup->jenkins = 'ci';
$lang->menugroup->compile = 'ci';
$lang->menugroup->job     = 'ci';

/* Nav group.*/
$lang->navGroup = new stdclass();
$lang->navGroup->my     = 'my';
$lang->navGroup->todo   = 'my';
$lang->navGroup->effort = 'my';

$lang->navGroup->personnel = 'program';

$lang->navGroup->productplan = 'product';
$lang->navGroup->release     = 'product';
$lang->navGroup->branch      = 'product';
$lang->navGroup->story       = 'product';
$lang->navGroup->tree        = 'product';

$lang->navGroup->project     = 'project';
$lang->navGroup->task        = 'project';
$lang->navGroup->qa          = 'project';
$lang->navGroup->bug         = 'project';
$lang->navGroup->doc         = 'project';
$lang->navGroup->testcase    = 'project';
$lang->navGroup->testtask    = 'project';
$lang->navGroup->testreport  = 'project';
$lang->navGroup->testsuite   = 'project';
$lang->navGroup->caselib     = 'project';
$lang->navGroup->feedback    = 'project';
$lang->navGroup->deploy      = 'project';
$lang->navGroup->stakeholder = 'project';

$lang->navGroup->projectstory   = 'project';
$lang->navGroup->programplan    = 'project';
$lang->navGroup->workestimation = 'project';
$lang->navGroup->budget         = 'project';
$lang->navGroup->review         = 'project';
$lang->navGroup->reviewissue    = 'project';
$lang->navGroup->weekly         = 'project';
$lang->navGroup->milestone      = 'project';
$lang->navGroup->pssp           = 'project';
$lang->navGroup->design         = 'project';
$lang->navGroup->repo           = 'project';
$lang->navGroup->issue          = 'project';
$lang->navGroup->risk           = 'project';
$lang->navGroup->auditplan      = 'project';
$lang->navGroup->cm             = 'project';
$lang->navGroup->nc             = 'project';
$lang->navGroup->job            = 'project';
$lang->navGroup->jenkins        = 'project';
$lang->navGroup->compile        = 'project';
$lang->navGroup->build          = 'project';
$lang->navGroup->projectrelease = 'project';
$lang->navGroup->projectbuild   = 'project';

$lang->navGroup->durationestimation = 'project';

$lang->navGroup->stage         = 'system';
$lang->navGroup->measurement   = 'system';
$lang->navGroup->report        = 'system';
$lang->navGroup->sqlbuilder    = 'system';
$lang->navGroup->auditcl       = 'system';
$lang->navGroup->cmcl          = 'system';
$lang->navGroup->process       = 'system';
$lang->navGroup->activity      = 'system';
$lang->navGroup->zoutput       = 'system';
$lang->navGroup->classify      = 'system';
$lang->navGroup->subject       = 'system';
$lang->navGroup->baseline      = 'system';
$lang->navGroup->reviewcl      = 'system';
$lang->navGroup->reviewsetting = 'system';
$lang->navGroup->holiday       = 'system';

$lang->navGroup->attend   = 'attend';
$lang->navGroup->leave    = 'attend';
$lang->navGroup->makeup   = 'attend';
$lang->navGroup->overtime = 'attend';
$lang->navGroup->lieu     = 'attend';

$lang->navGroup->admin     = 'admin';
$lang->navGroup->company   = 'admin';
$lang->navGroup->dept      = 'admin';
$lang->navGroup->ldap      = 'admin';
$lang->navGroup->group     = 'admin';
$lang->navGroup->webhook   = 'admin';
$lang->navGroup->sms       = 'admin';
$lang->navGroup->message   = 'admin';
$lang->navGroup->user      = 'admin';
$lang->navGroup->custom    = 'admin';
$lang->navGroup->cron      = 'admin';
$lang->navGroup->backup    = 'admin';
$lang->navGroup->mail      = 'admin';
$lang->navGroup->dev       = 'admin';
$lang->navGroup->extension = 'admin';
$lang->navGroup->action    = 'admin';
$lang->navGroup->search    = 'admin';

/* 错误提示信息。*/
$lang->error = new stdclass();
$lang->error->companyNotFound = "您访问的域名 %s 没有对应的公司。";
$lang->error->length          = array("『%s』长度错误，应当为『%s』", "『%s』长度应当不超过『%s』，且大于『%s』。");
$lang->error->reg             = "『%s』不符合格式，应当为:『%s』。";
$lang->error->unique          = "『%s』已经有『%s』这条记录了。如果您确定该记录已删除，请到后台-数据-回收站还原。";
$lang->error->gt              = "『%s』应当大于『%s』。";
$lang->error->ge              = "『%s』应当不小于『%s』。";
$lang->error->notempty        = "『%s』不能为空。";
$lang->error->empty           = "『%s』必须为空。";
$lang->error->equal           = "『%s』必须为『%s』。";
$lang->error->int             = array("『%s』应当是数字。", "『%s』应当介于『%s-%s』之间。");
$lang->error->float           = "『%s』应当是数字，可以是小数。";
$lang->error->email           = "『%s』应当为合法的EMAIL。";
$lang->error->URL             = "『%s』应当为合法的URL。";
$lang->error->date            = "『%s』应当为合法的日期。";
$lang->error->datetime        = "『%s』应当为合法的日期。";
$lang->error->code            = "『%s』应当为字母或数字的组合。";
$lang->error->account         = "『%s』只能是字母、数字或下划线的组合三位以上。";
$lang->error->passwordsame    = "两次密码应该相同。";
$lang->error->passwordrule    = "密码应该符合规则，长度至少为六位。";
$lang->error->accessDenied    = '您没有访问权限';
$lang->error->pasteImg        = '您的浏览器不支持粘贴图片！';
$lang->error->noData          = '没有数据';
$lang->error->editedByOther   = '该记录可能已经被改动。请刷新页面重新编辑！';
$lang->error->tutorialData    = '新手模式下不会插入数据，请退出新手模式操作';
$lang->error->noCurlExt       = '服务器未安装Curl模块。';

/* 分页信息。*/
$lang->pager = new stdclass();
$lang->pager->noRecord     = "暂时没有记录";
$lang->pager->digest       = "共 <strong>%s</strong> 条记录，%s <strong>%s/%s</strong> &nbsp; ";
$lang->pager->recPerPage   = "每页 <strong>%s</strong> 条";
$lang->pager->first        = "<i class='icon-step-backward' title='首页'></i>";
$lang->pager->pre          = "<i class='icon-play icon-flip-horizontal' title='上一页'></i>";
$lang->pager->next         = "<i class='icon-play' title='下一页'></i>";
$lang->pager->last         = "<i class='icon-step-forward' title='末页'></i>";
$lang->pager->locate       = "GO!";
$lang->pager->previousPage = "上一页";
$lang->pager->nextPage     = "下一页";
$lang->pager->summery      = "第 <strong>%s-%s</strong> 项，共 <strong>%s</strong> 项";
$lang->pager->pageOfText   = '第 {0} 页';
$lang->pager->firstPage    = '第一页';
$lang->pager->lastPage     = '最后一页';
$lang->pager->goto         = '跳转';
$lang->pager->pageOf       = '第 <strong>{page}</strong> 页';
$lang->pager->totalPage    = '共 <strong>{totalPage}</strong> 页';
$lang->pager->totalCount   = '共 <strong>{recTotal}</strong> 项';
$lang->pager->pageSize     = '每页 <strong>{recPerPage}</strong> 项';
$lang->pager->itemsRange   = '第 <strong>{start}</strong> ~ <strong>{end}</strong> 项';
$lang->pager->pageOfTotal  = '第 <strong>{page}</strong>/<strong>{totalPage}</strong> 页';

$lang->colorPicker = new stdclass();
$lang->colorPicker->errorTip = '不是有效的颜色值';

$lang->proVersion     = "<a href='https://api.zentao.net/goto.php?item=proversion&from=footer' target='_blank' id='proLink' class='text-important'>专业版 <i class='text-danger icon-pro-version'></i></a> &nbsp; ";
$lang->downNotify     = "下载桌面提醒";
$lang->downloadClient = "下载客户端";
$lang->clientHelp     = "客户端使用说明";
$lang->clientHelpLink = "http://www.zentao.net/book/zentaopmshelp/302.html#2";
$lang->website        = "https://www.zentao.net";

$lang->suhosinInfo     = "警告：数据太多，请在php.ini中修改<font color=red>sohusin.post.max_vars</font>和<font color=red>sohusin.request.max_vars</font>（大于%s的数）。 保存并重新启动apache或php-fpm，否则会造成部分数据无法保存。";
$lang->maxVarsInfo     = "警告：数据太多，请在php.ini中修改<font color=red>max_input_vars</font>（大于%s的数）。 保存并重新启动apache或php-fpm，否则会造成部分数据无法保存。";
$lang->pasteTextInfo   = "粘贴文本到文本域中，每行文字作为一条数据的标题。";
$lang->noticeImport    = "导入数据中，含有已经存在系统的数据，请确认这些数据要覆盖或者全新插入。";
$lang->importConfirm   = "导入确认";
$lang->importAndCover  = "覆盖";
$lang->importAndInsert = "全新插入";

$lang->noResultsMatch    = "没有匹配结果";
$lang->searchMore        = "搜索此关键字的更多结果：";
$lang->chooseUsersToMail = "选择要发信通知的用户...";
$lang->noticePasteImg    = "可以在编辑器直接贴图。";
$lang->pasteImgFail      = "贴图失败，请稍后重试。";
$lang->pasteImgUploading = "正在上传图片，请稍后...";

/* 时间格式设置。*/
if(!defined('DT_DATETIME1'))  define('DT_DATETIME1',  'Y-m-d H:i:s');
if(!defined('DT_DATETIME2'))  define('DT_DATETIME2',  'y-m-d H:i');
if(!defined('DT_MONTHTIME1')) define('DT_MONTHTIME1', 'n/d H:i');
if(!defined('DT_MONTHTIME2')) define('DT_MONTHTIME2', 'n月d日 H:i');
if(!defined('DT_DATE1'))      define('DT_DATE1',     'Y-m-d');
if(!defined('DT_DATE2'))      define('DT_DATE2',     'Ymd');
if(!defined('DT_DATE3'))      define('DT_DATE3',     'Y年m月d日');
if(!defined('DT_DATE4'))      define('DT_DATE4',     'n月j日');
if(!defined('DT_DATE5'))      define('DT_DATE5',     'j/n');
if(!defined('DT_TIME1'))      define('DT_TIME1',     'H:i:s');
if(!defined('DT_TIME2'))      define('DT_TIME2',     'H:i');
if(!defined('LONG_TIME'))     define('LONG_TIME',    '2059-12-31');

/* datepicker 时间*/
$lang->datepicker = new stdclass();

$lang->datepicker->dpText = new stdclass();
$lang->datepicker->dpText->TEXT_OR          = '或 ';
$lang->datepicker->dpText->TEXT_PREV_YEAR   = '去年';
$lang->datepicker->dpText->TEXT_PREV_MONTH  = '上月';
$lang->datepicker->dpText->TEXT_PREV_WEEK   = '上周';
$lang->datepicker->dpText->TEXT_YESTERDAY   = '昨天';
$lang->datepicker->dpText->TEXT_THIS_MONTH  = '本月';
$lang->datepicker->dpText->TEXT_THIS_WEEK   = '本周';
$lang->datepicker->dpText->TEXT_TODAY       = '今天';
$lang->datepicker->dpText->TEXT_NEXT_YEAR   = '明年';
$lang->datepicker->dpText->TEXT_NEXT_MONTH  = '下月';
$lang->datepicker->dpText->TEXT_CLOSE       = '关闭';
$lang->datepicker->dpText->TEXT_DATE        = '选择时间段';
$lang->datepicker->dpText->TEXT_CHOOSE_DATE = '选择日期';

$lang->datepicker->dayNames     = array('星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六');
$lang->datepicker->abbrDayNames = array('日', '一', '二', '三', '四', '五', '六');
$lang->datepicker->monthNames   = array('一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');

/* Common action icons 通用动作图标 */
$lang->icons['todo']      = 'check';
$lang->icons['product']   = 'cube';
$lang->icons['bug']       = 'bug';
$lang->icons['task']      = 'check-sign';
$lang->icons['tasks']     = 'tasks';
$lang->icons['project']   = 'stack';
$lang->icons['doc']       = 'file-text';
$lang->icons['doclib']    = 'folder-close';
$lang->icons['story']     = 'lightbulb';
$lang->icons['release']   = 'tags';
$lang->icons['roadmap']   = 'code-fork';
$lang->icons['plan']      = 'flag';
$lang->icons['dynamic']   = 'volume-up';
$lang->icons['build']     = 'tag';
$lang->icons['test']      = 'check';
$lang->icons['testtask']  = 'check';
$lang->icons['group']     = 'group';
$lang->icons['team']      = 'group';
$lang->icons['company']   = 'sitemap';
$lang->icons['user']      = 'user';
$lang->icons['dept']      = 'sitemap';
$lang->icons['tree']      = 'sitemap';
$lang->icons['usecase']   = 'sitemap';
$lang->icons['testcase']  = 'sitemap';
$lang->icons['result']    = 'list-alt';
$lang->icons['mail']      = 'envelope';
$lang->icons['trash']     = 'trash';
$lang->icons['extension'] = 'th-large';
$lang->icons['app']       = 'th-large';

$lang->icons['results']            = 'list-alt';
$lang->icons['create']             = 'plus';
$lang->icons['post']               = 'edit';
$lang->icons['batchCreate']        = 'plus-sign';
$lang->icons['batchEdit']          = 'edit-sign';
$lang->icons['batchClose']         = 'off';
$lang->icons['edit']               = 'edit';
$lang->icons['delete']             = 'close';
$lang->icons['copy']               = 'copy';
$lang->icons['report']             = 'bar-chart';
$lang->icons['export']             = 'export';
$lang->icons['report-file']        = 'file-powerpoint';
$lang->icons['import']             = 'import';
$lang->icons['finish']             = 'checked';
$lang->icons['resolve']            = 'check';
$lang->icons['start']              = 'play';
$lang->icons['restart']            = 'play';
$lang->icons['run']                = 'play';
$lang->icons['runCase']            = 'play';
$lang->icons['batchRun']           = 'play-sign';
$lang->icons['assign']             = 'hand-right';
$lang->icons['assignTo']           = 'hand-right';
$lang->icons['change']             = 'fork';
$lang->icons['link']               = 'link';
$lang->icons['close']              = 'off';
$lang->icons['activate']           = 'magic';
$lang->icons['review']             = 'glasses';
$lang->icons['confirm']            = 'search';
$lang->icons['confirmBug']         = 'search';
$lang->icons['putoff']             = 'calendar';
$lang->icons['suspend']            = 'pause';
$lang->icons['pause']              = 'pause';
$lang->icons['cancel']             = 'ban-circle';
$lang->icons['recordEstimate']     = 'time';
$lang->icons['customFields']       = 'cogs';
$lang->icons['manage']             = 'cog';
$lang->icons['unlock']             = 'unlock-alt';
$lang->icons['confirmStoryChange'] = 'search';
$lang->icons['score']              = 'tint';

/* Scrum menu. */
$lang->menu = new stdclass();
$lang->menu->scrum = new stdclass();
$lang->menu->scrum->program        = '仪表盘|program|index|';
$lang->menu->scrum->project        = "$lang->projectCommon|project|index|locate=no";
$lang->menu->scrum->projectstory   = array('link' => '需求|projectstory|requirement', 'alias' => 'requirement,story,track');
$lang->menu->scrum->doc            = '文档|doc|index|';
$lang->menu->scrum->qa             = '测试|qa|index';
$lang->menu->scrum->projectbuild   = array('link' => '版本|projectbuild|browse|project={PROJECT}');
$lang->menu->scrum->projectrelease = array('link' => '发布|projectrelease|browse');
$lang->menu->scrum->stakeholder    = '干系人|stakeholder|browse';
$lang->menu->scrum->morelink       = array('link' => '更多|project|morelink', 'class' => 'dropdown dropdown-hover waterfall-list');

$lang->scrum = new stdclass();
$lang->scrum->subMenu = new stdclass();
$lang->scrum->subMenu->morelink = new stdclass();
$lang->scrum->subMenu->morelink->program = '项目|program|PRJEdit|';

/* Waterfall menu. */
$lang->menu->waterfall = new stdclass();
$lang->menu->waterfall->programindex   = array('link' => '仪表盘|program|index|project={PROJECT}');
$lang->menu->waterfall->programplan    = array('link' => '计划|programplan|browse|project={PROJECT}', 'subModule' => 'programplan');
$lang->menu->waterfall->project        = array('link' => $lang->projectCommon . '|project|task|executionID={EXECUTION}', 'subModule' => ',project,task,');
$lang->menu->waterfall->weekly         = array('link' => '报告|weekly|index|project={PROJECT}', 'subModule' => ',milestone,');
$lang->menu->waterfall->doc            = array('link' => '文档|doc|index|project={PROJECT}');
$lang->menu->waterfall->projectstory   = array('link' => '需求|projectstory|requirement', 'alias' => 'requirement,story,track');
$lang->menu->waterfall->design         = '设计|design|browse|product={PRODUCT}';
$lang->menu->waterfall->ci             = '代码|repo|browse|';
$lang->menu->waterfall->qa             = array('link' => '测试|bug|browse|product={PRODUCT}', 'subModule' => ',testcase,testtask,testsuite,caselib,');
$lang->menu->waterfall->projectrelease = array('link' => '发布|projectrelease|browse');
$lang->menu->waterfall->issue          = '问题|issue|browse|';
$lang->menu->waterfall->risk           = '风险|risk|browse|';
$lang->menu->waterfall->morelink       = array('link' => '更多|project|morelink', 'class' => 'dropdown dropdown-hover waterfall-list', 'subModule' => 'stakeholder,workestimation,durationestimation,budget,pssp,stakeholder');

$lang->waterfall = new stdclass();
$lang->waterfall->subMenu = new stdclass();
$lang->waterfall->subMenu->morelink = new stdclass();
$lang->waterfall->subMenu->morelink->workestimation = array('link' => '估算|workestimation|index|program=%s', 'subModule' => 'durationestimation,budget');
$lang->waterfall->subMenu->morelink->stakeholder    = array('link' => '干系人|stakeholder|browse|', 'subModule' => 'stakeholder');
$lang->waterfall->subMenu->morelink->program        = '项目|program|PRJEdit|';

$lang->waterfallproduct   = new stdclass();
$lang->workestimation     = new stdclass();
$lang->budget             = new stdclass();
$lang->programplan        = new stdclass();
$lang->review             = new stdclass();
$lang->weekly             = new stdclass();
$lang->milestone          = new stdclass();
$lang->design             = new stdclass();
$lang->auditplan          = new stdclass();
$lang->cm                 = new stdclass();
$lang->nc                 = new stdclass();
$lang->pssp               = new stdclass();
$lang->issue              = new stdclass();
$lang->risk               = new stdclass();
$lang->stakeholder        = new stdclass();
$lang->durationestimation = new stdclass();
$lang->projectstory       = new stdclass();

$lang->workestimation->menu     = new stdclass();
$lang->budget->menu             = new stdclass();
$lang->programplan->menu        = new stdclass();
$lang->review->menu             = new stdclass();
$lang->weekly->menu             = new stdclass();
$lang->milestone->menu          = new stdclass();
$lang->design->menu             = new stdclass();
$lang->auditplan->menu          = new stdclass();
$lang->cm->menu                 = new stdclass();
$lang->pssp->menu               = new stdclass();
$lang->issue->menu              = new stdclass();
$lang->risk->menu               = new stdclass();
$lang->stakeholder->menu        = new stdclass();
$lang->waterfallproduct->menu   = new stdclass();
$lang->durationestimation->menu = new stdclass();
$lang->projectstory->menu       = new stdclass();

$lang->stakeholder->menu->list  = array('link' => '干系人列表|stakeholder|browse|', 'alias' => 'create,edit,view,batchcreate');
$lang->stakeholder->menu->issue = array('link' => '问题管理|stakeholder|issue|');

$lang->workestimation->menu->index    = '工作量估算|workestimation|index|project={PROJECT}';
$lang->workestimation->menu->duration = array('link' => '工期估算|durationestimation|index|project={PROJECT}', 'subModule' => 'durationestimation');
$lang->workestimation->menu->budget   = array('link' => '费用估算|budget|summary|', 'subModule' => 'budget');

$lang->durationestimation->menu = $lang->workestimation->menu;
$lang->budget->menu = $lang->workestimation->menu;

$lang->programplan->menu->gantt = array('link' => '甘特图|programplan|browse|programID={PROJECT}&productID={PRODUCT}&type=gantt');
$lang->programplan->menu->lists = array('link' => '阶段列表|programplan|browse|programID={PROJECT}&productID={PRODUCT}&type=lists', 'alias' => 'create');

$lang->projectstory->menu->requirement = array('link' => "{$lang->projectURCommon}|projectstory|requirement", 'subModule' => '');
$lang->projectstory->menu->story       = array('link' => "{$lang->projectSRCommon}|projectstory|story", 'subModule' => '');
$lang->projectstory->menu->track       = array('link' => '跟踪矩阵|projectstory|track', 'subModule' => '');

$lang->nc->menu = $lang->auditplan->menu;
$lang->noMenuModule = array('my', 'todo', 'effort', 'program', 'product', 'productplan', 'projectbuild', 'story', 'branch', 'release', 'attend', 'leave', 'makeup', 'overtime', 'lieu', 'custom', 'admin', 'mail', 'extension', 'dev', 'backup', 'action', 'cron', 'issue', 'risk', 'pssp', 'sms', 'message', 'webhook', 'search');

include (dirname(__FILE__) . '/menuOrder.php');
