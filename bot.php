<?
use SergiX44\Nutgram\Nutgram;

require_once 'vendor/autoload.php';

require_once('settings.php');

$bot = new Nutgram(TELEGRAMM_TOKEN);

$bot->sendDocument(
    fopen('testDocument.docx', 'r'),
    [
        'chat_id' => '2014527750',
        
    ]
);

$bot->run();