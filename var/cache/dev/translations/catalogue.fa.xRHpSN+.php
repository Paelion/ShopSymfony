<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fa', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'این فرم نباید شامل فیلد اضافه ای باشد.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'فایل بارگذاری شده بسیار بزرگ می باشد. لطفا فایل کوچکتری را بارگذاری نمایید.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'توکن CSRF نامعتبر می باشد. لطفا فرم را مجددا ارسال نمایید.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
