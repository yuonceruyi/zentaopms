<?php
$lang->webhook->common   = 'Webhook';
$lang->webhook->list     = 'Hook List';
$lang->webhook->api      = 'API';
$lang->webhook->entry    = 'Entry';
$lang->webhook->log      = 'Log';
$lang->webhook->assigned = 'AssignedTo';
$lang->webhook->setting  = 'Settings';

$lang->webhook->browse = 'Browse';
$lang->webhook->create = 'Create';
$lang->webhook->edit   = 'Edit';
$lang->webhook->delete = 'Delete';

$lang->webhook->id          = 'ID';
$lang->webhook->type        = 'Type';
$lang->webhook->name        = 'Name';
$lang->webhook->url         = 'Webhook Address';
$lang->webhook->domain      = 'ZenTao Domain';
$lang->webhook->contentType = 'Content Type';
$lang->webhook->sendType    = 'Sending Type';
$lang->webhook->product     = "{$lang->productCommon}";
$lang->webhook->project     = "{$lang->projectCommon}";
$lang->webhook->params      = 'Parameters';
$lang->webhook->action      = 'Trigger Action';
$lang->webhook->desc        = 'Description';
$lang->webhook->createdBy   = 'CreatedBy';
$lang->webhook->createdDate = 'Created';
$lang->webhook->editedby    = 'EditedBy';
$lang->webhook->editedDate  = 'Edited';
$lang->webhook->date        = 'Sent';
$lang->webhook->data        = 'Data';
$lang->webhook->result      = 'Result';

$lang->webhook->typeList['']          = '';
$lang->webhook->typeList['bearychat'] = 'Bearychat';
$lang->webhook->typeList['dingding']  = 'Dingding';
$lang->webhook->typeList['default']   = 'Others';

$lang->webhook->sendTypeList['sync']  = 'Synchronous';
$lang->webhook->sendTypeList['async'] = 'Asynchronous';

$lang->webhook->paramsList['objectType'] = 'Object Type';
$lang->webhook->paramsList['objectID']   = 'Object ID';
$lang->webhook->paramsList['product']    = "{$lang->productCommon}";
$lang->webhook->paramsList['project']    = "{$lang->projectCommon}";
$lang->webhook->paramsList['action']     = 'Action';
$lang->webhook->paramsList['actor']      = 'Acted By';
$lang->webhook->paramsList['date']       = 'Acted On';
$lang->webhook->paramsList['comment']    = 'Comment';
$lang->webhook->paramsList['text']       = 'Action Description';

$lang->webhook->confirmDelete = 'Do you want to delete this hook?';

$lang->webhook->trimWords = '';

$lang->webhook->note = new stdClass();
$lang->webhook->note->async   = 'If the send type is asynchronous, you need open cron.';
$lang->webhook->note->product = "All actions will trigger the hook if the {$lang->productCommon} is empty, else only actions of the {$lang->productCommon} will trigger it.";
$lang->webhook->note->project = "All actions will trigger the hook if the {$lang->projectCommon} is empty, else only actions of the {$lang->projectCommon} will trigger it.";

$lang->webhook->note->typeList['bearychat'] = 'Add a ZenTao bot in bearychat and get the webhook address.';
$lang->webhook->note->typeList['dingding']  = 'Add a customed bot in dingding and get the webhook address.';
$lang->webhook->note->typeList['default']   = 'Get a webhook address from others';

$lang->webhook->error = new stdclass();
$lang->webhook->error->curl = 'Load php-curl in php.ini.';
