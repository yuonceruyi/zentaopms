<?php
$config->program = new stdclass();
$config->program->editor = new stdclass();
$config->program->editor->create   = array('id' => 'desc',    'tools' => 'simpleTools');
$config->program->editor->edit     = array('id' => 'desc',    'tools' => 'simpleTools');
$config->program->editor->close    = array('id' => 'comment', 'tools' => 'simpleTools');
$config->program->editor->start    = array('id' => 'comment', 'tools' => 'simpleTools');
$config->program->editor->activate = array('id' => 'comment', 'tools' => 'simpleTools');
$config->program->editor->finish   = array('id' => 'comment', 'tools' => 'simpleTools');
$config->program->editor->suspend  = array('id' => 'comment', 'tools' => 'simpleTools');

$config->program->list = new stdclass();
$config->program->list->exportFields = 'id,name,code,template,category,status,begin,end,budget,PM,end,desc';

$config->program->create = new stdclass();
$config->program->edit   = new stdclass();
$config->program->create->requiredFields = 'name,code,begin,end';
$config->program->edit->requiredFields   = 'name,code,begin,end';