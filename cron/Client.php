<?php

require_once 'Subject.php';
require_once 'EmailObserver.php';
require_once 'SMSObserver.php';
require_once 'PushNotificationObserver.php';

class Client
{
    public function __construct()
    {
        $subject = new Subject();

        //$emailObserver = new EmailObserver($subject);
        $smsObserver = new SMSObserver($subject);
        //$pushObserver = new PushNotificationObserver($subject);

        echo "<h3>Starting observers</h3>";

        $subject->setState("my name: john smith");
        echo "<h3>Updating state</h3>";

        $subject->setState("my age: 30 years");

        echo "<h3>Detaching sms observer</h3>";
        $subject->detach($smsObserver);
        $subject->setState("my name: john smith");
    }
}

// run client
new Client();
