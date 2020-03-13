<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('mn', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Форм нэмэлт талбар багтаах боломжгүй.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Upload хийсэн файл хэтэрхий том байна. Бага хэмжээтэй файл оруулна уу.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF token буруу байна. Формоо дахин илгээнэ үү.',
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
