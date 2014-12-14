<?php
include './UserController.php';
include './UserView.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author dave_pc
 */
class User {
    private $userId; //int
    private $interests; //List<EventCategory>
    private $myTickets; //List<Ticket>
    private $notifications; //List<Notification>
    private $Prof; //Class Profile
    private $Notif; //Class Notifications
    private $Tick; // Class Tickets
    private $EventCtgry; // Class EventCategory

    public function __construct($usId, $interst, $myTick, $notif) {
        $this->userId = $usId;
        $this->interests = $interst;
        $this->myTickets = $myTick;
        $this->notifications = $notif;
        $this->Prof =  new Profile();
        $this->Notif = new Notification();
        $this->Tick = new Ticket();
        $this->EventCtgry = new EventCategory();
    }
    
    public function setUserId($useID){
        $this->userId = $useID;
    }
    
    public function setInterests($intersts){
        $this->interests = $intersts;
    }
    
    public function setMyTicket($ticket){
        $this->myTickets = $ticket;
    }
    
    public function setNotifications($notif){
        $this->notifications = $notif;
    }
    
    public function getUserId(){
        return $this->userId;
    }
    
    public function getInterests(){
        return $this->interests;
    }
    
    public function getMyTicket(){
        return $this->myTickets;
    }
    
    public function getNotifications(){
        return $this->notifications;
    }
}
