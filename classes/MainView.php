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
    
    public function __construct() {
        $this->usrView = new UserView();
        $this->streamVar = new Stream();
        $this->main = new Main();
        $this->EvntView = new EventView();
    }
    
    public function signIn()
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
