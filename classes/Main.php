<?php

include './DatabaseManagers/UserDatabaseManager.php';
include './DatabaseManagers/DatabaseManager.php';
include './DatabaseManagers/EventDatabaseManager.php';
class Main {
    private $currentUserID;
    private $UCTRL;
    private $UDBM;
    private $EDBM;
    private $ECTRL;
    private $UserObj;
    


    public function __construct($userID,$currUsrId, $evtDM, $usrDM
                                , $evID, $evName, $evDescp, $evCatgry
                                , $evLocation, $evDay, $evStrtTime
                                , $evEndTime, $evNumberOfTickets
                                    ,$usId, $interst, $myTick, $notif, $followers
                                   , $following, $mailRemind, $notiRemind, $preferCtrl
                                    , $SettCtrl, $notiID, $notification, $seen)
    {
        $this->currentUserID = $userID;
        $this->UDBM = new UserDatabaseManager();
        $this->EDBM = new EventDatabaseManager();
        $this->ECTRL = new EventsController($currUsrId, $evtDM, $usrDM
                                            , $evID, $evName, $evDescp
                                            , $evCatgry, $evLocation
                                            , $evDay, $evStrtTime, $evEndTime
                                            , $evNumberOfTickets);
        $this->UserObj = new User($usId, $interst, $myTick, $notif, $followers
                                   , $following, $mailRemind, $notiRemind, $preferCtrl
                                    , $SettCtrl, $notiID, $notification, $seen);
        $this->UCTRL = new UserController($this->UDBM, $this->UserObj, $userID); 
    }
    
    public function setCurrentID($userID)
    {
        $this->currentUserID = $userID;
    }
    
    public function getCurrentID()
    {
        return $this->currentUserID;
    }
    

    public function createControllers(){
        
    }
    
    public function singIn($email, $pass){
        return true;
    }
    
    public function signUp($email, $pass){
        
    }
    
    public function logout(){
        
    }
    
    public function initMainView(){
        
    }
    
    public function finalize(){
        
    }
    
    public function suggestUsersToFollow($userID){
        
    }
    
    public function createEvent($name){
        return 0;
    }
}
?>
