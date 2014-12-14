<?php

class NotificationController {
    private $currentUserID;
    private $userObject;
    private $userDBM;
    private $notification; //List<Notification> 1..* relation.


    public function __construct($cuid, $usrObj, $usrDBM) {
        $this->currentUserID = $cuid;
        $this->userDBM = $usrDBM;
        $this->userObject = $usrObj;
        $this->notification = new ArrayObject(); 
    }
    
    public function loadNotification()
    {
        
    }
    
    public function getNotification()
    {
        //return list of notification
        return NULL;
    }
    
    public function addNotification($noti /*string*/)
    {
        return TRUE;
    }
}
