<?php

class NotificationView {
    private $notifCtrl;
    
    public function __construct($ntCTRL) {
        $this->notifCtrl = $ntCTRL;
    }
    
    public function viewNotifications()
    {
        //display notification to the user
    }
    
    public function setSeen($notifID)
    {
        //change state of the notification.
    }
}
