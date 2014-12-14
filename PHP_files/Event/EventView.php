<?php
include './Event.php';
include './EventController.php';
include './EventDatabaseManager.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EventView
 *
 * @author dave_pc
 */
class EventView implements AbstractView{
    private $eventId; //int
    private $editMode;//Boolean
    private $EvtCntrl; //Class EventController
    
    public function __construct($evtId, $editMod, $evtCtrl) {
        $this->EvtCntrl = $evtCtrl;
        $this->eventId = $evtId;
        $this->editMode = $editMod;
    }
    
    public function joinEvent(){
        //Boolean Function
    }
    
    public function leaveEvent(){
        //Boolean Function
    }
    
    public function saveEvent(){
        //Boolean Function
    }
    
    public function editName(){
        //Boolean Function
    }
    
    public function editDescription(){
        //Boolean Function
    }
    
    public function editCategory(){
        //Boolean Function
    }
    
    public function editLocation(){
        //Boolean Function
    }
    
    public function editDate(){
        //Boolean Function
    }
    
    public function editNumberOfTickets(){
        //Boolean Function
    }
    
    public function setEventId($evtID){
        $this->eventId = $evtID;
    }

    public function setEditMode($editMod){
        $this->editMode = $editMod;
    }
    
    public function getEventId(){
        return $this->eventId;
    }
    
    public function getEditMode(){
        return $this->editMode;
    }

    public function initView() {
        
    }

    public function saveData() {
        
    }
}
