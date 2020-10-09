<?php

require_once 'AbstractObserver.php';

class SMSObserver extends AbstractObserver
{
    public function update()
    {
        // sms sending code omitted for brevity
        echo "<br/>Sending sms notification with data: " . $this->subject->getState() . "<br/>";
    }
}
