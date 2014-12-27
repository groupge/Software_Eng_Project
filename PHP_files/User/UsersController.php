<?php

use ArrayObject;

include './User.php';
include './UserView.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author dave_pc
 */
class UsersController {
    private $currentUserId; //int
    private $User; //Class User
    private $UserDBM; //Class UserDatabaseManager
    private $EventCtgry; //Class EventCategory
    private $Ticket; //Class Tickets


    public function __construct($currentUsrID, $Usr, $UsrDBM, $EventCtgr, $tickt) {
        $this->currentUserId = $currentUsrID;
        $this->User = $Usr;
        $this->UserDBM = $UsrDBM;
        $this->EventCtgry = new ArrayObject();
        $this->Ticket = new ArrayObject();
    }
    
    public function loadUserData(){
        //void Function
    }
    
    public function saveUserData(){
        //Boolean function
        return TRUE;
    }
    
    public function getInterests(){
        //List<EventCategory>
    }
    
    public function getTickets(){
        //List<Tickets>
    }
    
    public function addInterest($eventCtgry){
        //void function
    }
    
    public function removeInterest($eventCtgry){
        //void function
    }
    
    public function addTicket($Ticket){
        //void function
    }
    
    public function followUser(){
        //Boolean function
        return TRUE;
    }
    
    public function getFollowers(){
        //List<String>
    }
    
    public function getFollowing(){
        //List<String>
    }
}
