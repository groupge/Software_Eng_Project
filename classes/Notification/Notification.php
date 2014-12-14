<?php

class Notification {
    private $notificationID; // int
    private $notification; //string
    private  $seen; //bool
    
    public function __construct($notiID, $notification, $seen) {
        $this->notification = $notification;
        $this->notificationID = $notiID;
        $this->seen = $seen;
    }
    
    public function isSeen()
    {
        // return the state of the notif
        return true;
    }
    
    public function getNoti()
    {
        //return list of notification
        return NULL;
    }
}
