<?php

namespace App;

use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\AndroidConfig;
use DB;
use Illuminate\Support\Facades\Schema;
use App\Message;
class FcmService
{
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    public function sendMessageNotification()
    {
        $topic = 'a-topic';

        $message = CloudMessage::withTarget('topic', $topic);

        $message = CloudMessage::fromArray([
            'topic' => $topic,
            'notification' => [/* Notification data as array */], // optional
            'data' => [/* data array */], // optional
        ]);

        $messaging->send($message);
    }


}
