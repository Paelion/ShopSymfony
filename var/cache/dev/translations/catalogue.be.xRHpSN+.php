<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('be', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Гэта форма не павінна мець дадатковых палей.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Запампаваны файл быў занадта вялікім. Калі ласка, паспрабуйце запампаваць файл меншага памеру.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF-токен не сапраўдны. Калі ласка, паспрабуйце яшчэ раз адправіць форму.',
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
