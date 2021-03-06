<?php
/**
 * The build view file of project module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     project
 * @version     $Id: build.html.php 4262 2013-01-24 08:48:56Z chencongzhi520@gmail.com $
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php js::set('confirmDelete', $lang->build->confirmDelete)?>
<?php js::set('projectID', $projectID)?>
<div id="mainMenu" class="clearfix table-row">
  <div class="btn-toolbar pull-left">
    <?php
    $label  = "<span class='text'>{$lang->project->build}</span>";
    $active = '';
    if($type == 'all')
    {
        $active = 'btn-active-text';
        $label .= " <span class='label label-light label-badge'>{$buildsTotal}</span>";
    }
    echo html::a(inlink('browse', "projectID={$projectID}&type=all"), $label, '', "class='btn btn-link $active' id='all'")
    ?>
    <div class="input-control space w-150px"><?php echo html::select('product', $products, $product, "onchange='changeProduct(this.value)' class='form-control chosen' data-placeholder='{$lang->productCommon}'");?></div>
    <a class="btn btn-link querybox-toggle" id="bysearchTab"><i class="icon icon-search muted"></i> <?php echo $lang->project->byQuery;?></a>
  </div>
</div>
<div id="mainContent">
  <div class="cell <?php if($type == 'bysearch') echo 'show';?>" id="queryBox" data-module='projectBuild'></div>
  <?php if(empty($projectBuilds)):?>
  <div class="table-empty-tip">
    <p>
      <span class="text-muted"><?php echo $lang->build->noBuild;?></span>
      <?php if(common::canModify('project', $project) and common::hasPriv('build', 'create')):?>
      <?php echo html::a('#projects', "<i class='icon icon-plus'></i> " . $lang->build->create, '', "data-toggle='modal' class='btn btn-info'");?>
      <?php endif;?>
    </p>
  </div>
  <?php else:?>
  <div class='main-table' data-ride="table" data-checkable="false">
    <table class="table text-center" id='buildList'>
      <thead>
        <tr>
          <th class="c-id-sm"><?php echo $lang->build->id;?></th>
          <th class="c-name w-200px text-left"><?php echo $lang->build->product;?></th>
          <th class="c-name text-left"><?php echo $lang->build->name;?></th>
          <th class="c-name text-left"><?php echo $lang->projectCommon;?></th>
          <th class="c-url"><?php echo $lang->build->scmPath;?></th>
          <th class="c-url"><?php echo $lang->build->filePath;?></th>
          <th class="c-date"><?php echo $lang->build->date;?></th>
          <th class="c-user"><?php echo $lang->build->builder;?></th>
          <th class="c-actions-5"><?php echo $lang->actions;?></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($projectBuilds as $productID => $builds):?>
        <?php foreach($builds as $index => $build):?>
        <tr data-id="<?php echo $productID;?>">
          <td class="c-id-sm text-muted"><?php echo html::a(helper::createLink('build', 'view', "buildID=$build->id"), sprintf('%03d', $build->id));?></td>
          <td class="c-name text-left" title='<?php echo $build->productName;?>'><?php echo $build->productName;?></td>
          <td class="c-name">
            <?php if($build->branchName) echo "<span class='label label-outline label-badge'>{$build->branchName}</span>"?>
            <?php echo html::a($this->createLink('build', 'view', "build=$build->id"), $build->name);?>
          </td>
          <td class="c-name text-left" title='<?php echo $build->projectName;?>'><?php echo $build->projectName;?></td>
          <td class="c-url" title="<?php echo $build->scmPath?>"><?php  echo strpos($build->scmPath,  'http') === 0 ? html::a($build->scmPath)  : $build->scmPath;?></td>
          <td class="c-url" title="<?php echo $build->filePath?>"><?php echo strpos($build->filePath, 'http') === 0 ? html::a($build->filePath) : $build->filePath;?></td>
          <td class="c-date"><?php echo $build->date?></td>
          <td class="c-user em"><?php echo zget($users, $build->builder);?></td>
          <td class="c-actions">
            <?php
            if(common::hasPriv('build', 'linkstory') and common::hasPriv('build', 'view') and common::canBeChanged('build', $build))
            {
                echo html::a($this->createLink('build', 'view', "buildID=$build->id&type=story&link=true"), "<i class='icon icon-link'></i>", '', "class='btn' title='{$lang->build->linkStory}'");
            }
            common::printIcon('testtask', 'create', "product=$build->product&project={$build->executionID}&build=$build->id", $build, 'list', 'bullhorn');
            $lang->project->bug = $lang->project->viewBug;
            common::printIcon('project', 'bug',  "project={$build->executionID}&orderBy=status&build=$build->id", $build, 'list');
            common::printIcon('build',   'edit', "buildID=$build->id", $build, 'list');
            if(common::hasPriv('build',  'delete', $build))
            {
                $deleteURL = $this->createLink('build', 'delete', "buildID=$build->id&confirm=yes");
                echo html::a("javascript:ajaxDelete(\"$deleteURL\", \"buildList\", confirmDelete)", '<i class="icon-trash"></i>', '', "class='btn' title='{$lang->build->delete}'");
            }
            ?>
          </td>
        </tr>
        <?php endforeach;?>
        <?php endforeach;?>
      </tbody>
    </table>
  </div>
  <?php endif;?>
</div>
<div class="modal fade" id="projects">
  <div class="modal-dialog mw-500px">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon icon-close"></i></button>
        <h4 class="modal-title"><?php echo $lang->projectbuild->project;?></h4>
      </div>
      <div class="modal-body">
        <div class='input-group'>
          <?php echo html::select('projects', $projects, '', "class='form-control chosen' id=project");?>
          <span class='input-group-btn'><?php echo html::commonButton($lang->build->create, "id='createBuildButton'", 'btn btn-primary');?></span>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include '../../common/view/footer.html.php';?>
