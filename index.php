<?php
namespace Foo;

include 'vendor/autoload.php';

use OhSky\LineTrialBot\Sender;
use OhSky\LineTrialBot\RequestHandler;

$sender = new Sender(
    getenv('LINE_CHANNEL_ID'),
    getenv('LINE_CHANNEL_SECRET'),
    getenv('LINE_MID'),
    ['verify' => false]
);

$requestBodyJson = file_get_contents('php://input');
$eventList = RequestHandler::getEventList($requestBodyJson);

foreach ($eventList as $event) {
    $sender->sendText(
        [$event->content->from],
        $event->content->text
    );
}