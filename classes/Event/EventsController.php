<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EventController
 *
 * @author dave_pc
 */
 require('./Event.php');
require('./EventView.php');
require('../DatabaseManagers/EventDatabaseManager.php');
require('../DatabaseManagers/UserDatabaseManager.php');

class EventsController {
    private $currentUserId; //int
    private $EvtDBM;//Class EventDatabaseManager
    private $UsrDBM;//Class UserDatabaseManager
    private $Evt; //Class Event
    
    public function __construct($currUsrId/*,$evID, $evName
                                , $evDescp, $evCatgry, $evLocation, $evDay
                                , $evStrtTime, $evEndTime, $evNumberOfTickets*/) 
    {
        $this->currentUserId = $currUsrId;
        $this->EvtDBM = new EventDatabaseManager();
       $this->UsrDBM = new UserDatabaseManager();
        /*$this->Evt = new Event($evID, $evName, $evDescp, $evCatgry, $evLocation, $evDay, $evStrtTime, $evEndTime, $evNumberOfTickets);*/
		$this->Evt = new Event(null,null,null,null,null,null,null,null,null);
    }
    
    public function getEvent($eventID){
		$this->Evt = $this->EvtDBM->getEvent($eventID);
		return $this->Evt;
    }
    
    public function createNewEvent($evt){
        return $this->EvtDBM->saveEvent($evt);
    }
    
    public function saveEvent($evt){
        return $this->EvtDBM->saveEvent($evt);
    }
    
    public function joinEvent($evtID){
        return $this->EvtDBM->joinEvent($evtID);
    }
    
    public function leaveEvent($evtID){
        return $this->EvtDBM->leaveEvent($evtID);
    }
    
    public function deleteEvent($evtID){
        return $this->EvtDBM->deleteEvent($evtID, $this->currentUserId);
    }
    
    public function getRecentEvents($date){
       //List<Events>
    }
    
    public function getCreatedEventsByUserId(){
        //ListL<Event>
    }
    
    public function getJoinedEventByUserId(){
        //List<Event>
    }
    
    public function searchEvents($evt){
        
    }
    
    public function addNewNotification($notif){
        //Boolean Function
        return TRUE;
    }
    
    public function buyTicket($evtID, $price){
        //Boolean Function
        return TRUE;
    }
    
    public function setEditedEventName($newName){
        
    }
    
    public function setEditedEventDescription($newDescrip){
        
    }
    
    public function setEditedEventCategory($newCategry){
        
    }
    
    public function setEditedEventLocation($newLocation){
        
    }
    
    public function setEditedEventDate($newDate){
        
    }
    
    public function setEditedEventNumberOfTickets($newNumOfTickets){
        
    }

}
