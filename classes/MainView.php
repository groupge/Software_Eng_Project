<?php

class MainView implements AbstractView {
    private $views; //map<Strin, AbstractView>
    private $usrView;
    private $streamVar;
    private $main;
    private $EvntView;
    
    private function switchViews($viewName)
    {
        
    }
    
    private function attachControllerToViews()
    {
        
    }
    
    public function __construct($UseCtrl, $SettCtrl, $PrefControl, $EvntCTRL
                                ,$cuid, $evtId, $editMod, $evtCtrl
                                ,$userID, $currUsrId, $evtDM, $usrDM, $evID, $evName
                                , $evDescp, $evCatgry, $evLocation, $evDay, $evStrtTime
                                , $evEndTime, $evNumberOfTickets, $usId, $interst
                                , $myTick, $notif, $followers, $following
                                , $mailRemind, $notiRemind, $preferCtrl
                                , $notiID, $notification, $seen)
    {
        $this->usrView = new UserView($UseCtrl, $SettCtrl, $PrefControl, $EvntCTRL);
        $this->streamVar = new Stream($cuid, $EvntCTRL, $evtId, $editMod, $evtCtrl);
        $this->main = new Main($userID, $currUsrId, $evtDM, $usrDM, $evID, $evName
                                , $evDescp, $evCatgry, $evLocation, $evDay, $evStrtTime
                                , $evEndTime, $evNumberOfTickets, $usId, $interst
                                , $myTick, $notif, $followers, $following
                                , $mailRemind, $notiRemind, $preferCtrl, $SettCtrl
                                , $notiID, $notification, $seen);
        $this->EvntView = new EventView($evtId, $editMod, $evtCtrl);
    }
    
    public function signIn($uname, $pass)
    {
		
    }
    
    public function signUp()
    {
        
    }
    
    public function logout()
    {
        
    }
    
    public function createEvent()
    {
        
    }
    
    public function viewSuggestedUsersNames()
    {
        
    }
    
    public function followUser($userID)
    {
        
    }
    
    public function initView()
    {
		 
    }
    
    public function  saveData()
    {
        
    }
            
}
