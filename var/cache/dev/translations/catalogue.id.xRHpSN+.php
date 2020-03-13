<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('id', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Gabungan kolom tidak boleh mengandung kolom tambahan.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Berkas yang di unggah terlalu besar. Silahkan coba unggah berkas yang lebih kecil.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF-Token tidak sah. Silahkan coba kirim ulang formulir.',
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
