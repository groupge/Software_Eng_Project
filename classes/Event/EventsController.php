<?php
include './Event.php';
include './EventView.php';
include './EventDatabaseManager.php';


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
class EventsController {
    private $currentUserId; //int
    private $EvtDBM;//Class EventDatabaseManager
    private $UsrDBM;//Class UserDatabaseManager
    private $Evt; //Class Event
    
    public function __construct($currUsrId, $evtDM, $usrDM,$evID, $evName
                                , $evDescp, $evCatgry, $evLocation, $evDay
                                , $evStrtTime, $evEndTime, $evNumberOfTickets) 
    {
        $this->currentUserId = $currUsrId;
        $this->EvtDBM = $evtDM;
        $this->UsrDBM = $usrDM;
        $this->Evt = new Event($evID, $evName, $evDescp, $evCatgry, $evLocation, $evDay, $evStrtTime, $evEndTime, $evNumberOfTickets);
    }
    
    public function getEvent($eventID){
        //Event Function
    }
    
    public function createNewEvent($evt){
        ////Boolean Function
        return TRUE;
    }
    
    public function saveEvent($evt){
        //Boolean Function
        return TRUE;
    }
    
    public function joinEvent($evtID){
        //Boolean Function
        return TRUE;
    }
    
    public function leaveEvent($evtID){
        //Boolean Function
        return TRUE;
    }
    
    public function deleteEvent($evtID){
        //Boolean Function
        return TRUE;
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
