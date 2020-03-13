<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('pt_BR', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Este formulário não deve conter campos adicionais.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'O arquivo enviado é muito grande. Por favor, tente enviar um arquivo menor.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'O token CSRF é inválido. Por favor, tente reenviar o formulário.',
  ),
));

$cataloguePt = new MessageCatalogue('pt', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Este formulário não deveria conter campos extra.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'O arquivo enviado é muito grande. Por favor, tente enviar um ficheiro mais pequeno.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'O token CSRF é inválido. Por favor submeta o formulário novamente.',
  ),
));
$catalogue->addFallbackCatalogue($cataloguePt);
$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
));
$cataloguePt->addFallbackCatalogue($catalogueEn);

return $catalogue;
