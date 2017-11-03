<?php
$lang->score->common       = 'My score';
$lang->score->record       = 'Score record';
$lang->score->current      = 'Current score';
$lang->score->level        = 'Level score';
$lang->score->reset        = 'Reset';
$lang->score->tips         = 'Yesterday added score:<strong>%d</strong><br/>Total score:<strong>%d</strong>';
$lang->score->resetTips    = 'Reset score the execution time may be longer. <strong>Do not close the window.</strong>';
$lang->score->resetStart   = 'Start reset';
$lang->score->resetLoading = 'Resetting,process:';
$lang->score->resetFinish  = 'Reset finish';

$lang->score->id      = 'ID';
$lang->score->userID  = 'UserID';
$lang->score->account = 'User';
$lang->score->module  = 'Module';
$lang->score->method  = 'Method';
$lang->score->before  = 'Before';
$lang->score->score   = 'Score';
$lang->score->after   = 'After';
$lang->score->time    = 'Time';
$lang->score->desc    = 'Description';
$lang->score->noLimit = 'No limited';
$lang->score->times   = 'Times';
$lang->score->hour    = 'Hour';

$lang->score->models['task']        = 'Task';
$lang->score->models['tutorial']    = 'Tutorial';
$lang->score->models['user']        = 'User';
$lang->score->models['ajax']        = 'Other';
$lang->score->models['doc']         = 'Doc';
$lang->score->models['todo']        = 'Todo';
$lang->score->models['story']       = 'Story';
$lang->score->models['bug']         = 'Bug';
$lang->score->models['testcase']    = 'TestCase';
$lang->score->models['testtask']    = 'TestTask';
$lang->score->models['build']       = 'Build';
$lang->score->models['project']     = 'Project';
$lang->score->models['productplan'] = 'Plan';
$lang->score->models['release']     = 'Release';
$lang->score->models['block']       = 'Block';
$lang->score->models['search']      = 'Search';

$lang->score->methods['task']['create']              = 'Create task';
$lang->score->methods['task']['close']               = 'Close task';
$lang->score->methods['task']['finish']              = 'Finish task';
$lang->score->methods['tutorial']['keepAll']         = 'Finish tutorial';
$lang->score->methods['user']['login']               = 'Login';
$lang->score->methods['user']['changePassword']      = 'Change password';
$lang->score->methods['user']['editProfile']         = 'Edit profile';
$lang->score->methods['ajax']['selectTheme']         = 'Change theme';
$lang->score->methods['ajax']['selectLang']          = 'Change Lang';
$lang->score->methods['ajax']['showSearchMenu']      = 'Advanced search';
$lang->score->methods['ajax']['customMenu']          = 'Custom menu';
$lang->score->methods['ajax']['dragSelected']        = 'Drag selected';
$lang->score->methods['ajax']['lastNext']            = 'Page turned';
$lang->score->methods['ajax']['switchToDataTable']   = 'Switch dataTable';
$lang->score->methods['ajax']['submitPage']          = 'Change page number';
$lang->score->methods['ajax']['quickJump']           = 'Quick jump';
$lang->score->methods['ajax']['batchCreate']         = 'Batch create';
$lang->score->methods['ajax']['batchEdit']           = 'Batch update';
$lang->score->methods['ajax']['batchOther']          = 'Batch other';
$lang->score->methods['doc']['create']               = 'Create doc';
$lang->score->methods['todo']['create']              = 'Create todo';
$lang->score->methods['story']['create']             = 'Create story';
$lang->score->methods['story']['close']              = 'Close story';
$lang->score->methods['bug']['create']               = 'Create bug';
$lang->score->methods['bug']['confirmBug']           = 'Confirm bug';
$lang->score->methods['bug']['createFormCase']       = 'Create bug form case';
$lang->score->methods['bug']['resolve']              = 'Resolve bug';
$lang->score->methods['bug']['saveTplModal']         = 'Bug save template';
$lang->score->methods['testtask']['runCase']         = 'Run test case';
$lang->score->methods['testcase']['create']          = 'Create test case';
$lang->score->methods['build']['create']             = 'Create build';
$lang->score->methods['project']['create']           = 'Create project';
$lang->score->methods['project']['close']            = 'Project finish';
$lang->score->methods['productplan']['create']       = 'Create plan';
$lang->score->methods['release']['create']           = 'Create release';
$lang->score->methods['block']['set']                = 'Custom block';
$lang->score->methods['search']['saveQuery']         = 'Save search query';
$lang->score->methods['search']['saveQueryAdvanced'] = 'Advanced search';

$lang->score->extended->userchangePassword = 'Password strength,medium:add extra score : #changePassword,strength,1#; Strong:add extra score : #changePassword,strength,2#.';
$lang->score->extended->projectclose       = 'Project closed,PM add extra score : #projectClose,manager,close#,Team member add extra score : #projectClose,member,close#. Completed on schedule or in advance,PM add extra score : #projectClose,manager,in#,Team member Add extra score : #projectClose,member,in#.';
$lang->score->extended->bugresolve         = 'Bug resolved,Add extra severity score ：s1 + #bugResolve,severity,3#, s2 + #bugResolve,severity,2#, s3 + #bugResolve,severity,1#。';
$lang->score->extended->bugconfirmBug      = 'Bug confirmed,Add extra severity score ：s1 + #bugConfirmBug,severity,3#, s2 + #bugConfirmBug,severity,2#, s3 + #bugConfirmBug,severity,1#。';
$lang->score->extended->taskfinish         = 'Task finished, Add extra score round(consumed /10 * estimate / consumed) + severity score(p1 #taskFinish,pri,1#, p2, #taskFinish,pri,2#)。';
$lang->score->extended->storyclose         = 'Add extra score for story creator : #storyClose,createID#.';