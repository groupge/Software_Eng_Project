<?php
require('./EventController.php');
require('./EventView.php');
require('../DatabaseManagers/EventDatabaseManager.php');
require('../EventCategory.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Event
 *
 * @author dave_pc
 */
class Event {
    private $eventID; // int
    private $name; // String
    private $description; // String
    private $category; // EventCategory
    private $location; //String
    private function setCreationDate(); // void function
    private $day; //Date
    private $startTime; //Time
    private $endTime; //Time
    private $numberOfTickets;//int
    //private $eventCategry; //Class EventCatagory /*Bakary : this was not necessairy since we have category declared up*/


    public function __construct($evID, $evName, $evDescp, $evCatgry,
                                $evLocation, $evDay, $evStrtTime, $evEndTime,
                                $evNumberOfTickets) {
        $this->eventCategry = EventCategory::Art;
        $this->eventID = $evID;
        $this->name = $evName;
        $this->description = $evDescp;
        $this->category = $evCatgry;
        $this->location = $evLocation;
        $this->day = $evDay;
        $this->startTime = $evStrtTime;
        $this->endTime = $evEndTime;
        $this->numberOfTickets = $evNumberOfTickets;
    }
    
    public function setEventID($evtID){
        $this->eventID = $evtID;
    }
    
    public function setName($evtName){
        $this->name = $evtName;
    }
    
    public function setDescription($evtDescption){
        $this->description = $evtDescption;
    }
    
    public function setCategory($evtCategory){
        $this->category = $evtCategory;
    }
    
    public function setLocation($evtLocation){
        $this->location = $evtLocation;
    }
    
    public function setDay($evtDay){
        $this->day = $evtDay;
    }
    
    public function setStartTime($evtStartTime){
        $this->startTime = $evtStartTime;
    }
    
    public function setEndTime($evtEndTime){
        $this->endTime = $evtEndTime;
    }
    
    public function setNumberOfTickets($evtNumOfTick){
        $this->numberOfTickets = $evtNumOfTick;
    }
    
    public function getEventID(){
        return $this->eventID;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function getDescription(){
        return $this->description;
    }
    
    public function getCategory(){
        return $this->category;
    }
    
    public function getLocation(){
        return $this->location;
    }
    
    public function getDay(){
        return $this->day;
    }
    
    public function getStartTime(){
        return $this->startTime;
    }
    
    public function getEndTime(){
        return $this->endTime;
    }
    
    public function getNumberOfTickets(){
        return $this->numberOfTickets;
    }
}
