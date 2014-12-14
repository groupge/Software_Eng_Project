<?php

class Stream implements AbstractView {
    private $currentID;
    private $EvntView;
    private $EvntCTRL;
    
    public function __construct($cuid, $evntctrl) {
        $this->currentID = $cuid;
        $this->EvntView = new EventView();
        $this->EvntCTRL = $evntctrl;
    }
    
    public function viewRecentEvent()
    {
        
    }
    
    public function searchForEvent()
    {
        
    }
    
    public function viewJoinedEvent()
    {
        
    }
    
    public function viewMyEvents()
    {
        
    }
    
    public function viewEvent($EventID)
    {
        
    }
    
    public function editEvent($EventID)
    {
        
    }
    
    public function deleteEvent($EventID)
    {
        
    }
    
    public function joinEvent($EventID)
    {
        
    }
    
    public function leaveEvent($EventID)
    {
        
    }
    
    public function initView()
    {
        
    }
    
    public function saveData()
    {
        
    }
}
