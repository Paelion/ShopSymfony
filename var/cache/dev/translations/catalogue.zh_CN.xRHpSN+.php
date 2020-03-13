<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('zh_CN', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => '该表单中不可有额外字段.',
    'The uploaded file was too large. Please try to upload a smaller file.' => '上传文件太大， 请重新尝试上传一个较小的文件.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF 验证符无效， 请重新提交.',
  ),
));

$catalogueZh = new MessageCatalogue('zh', array (
));
$catalogue->addFallbackCatalogue($catalogueZh);
$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
));
$catalogueZh->addFallbackCatalogue($catalogueEn);

return $catalogue;
