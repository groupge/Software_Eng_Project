<?php
include './User.php';
include './UserController.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserView
 *
 * @author dave_pc
 */
class UserView {
    private $SettView; //Class SettingsView
    private $PrefView; //Class PreferencesView
    private $NotifView; //Class NotificationView
    private $UserCtrl; //Class UsersController

    public function __construct($UseCtrl) {
        $this->UserCtrl = $UseCtrl;
        $this->SettView = new SetingsView();
        $this->PrefView = new PreferencesView();
        $this->NotifView = new NotificationView();
    }
    
    public function viewFollowers(){
        
    }
    
    public function viewFollowing(){
        
    }
    
    public function viewTickets(){
        
    }
    
    public function viewInterests(){
        
    }
    
    public function unFollow(){
        
    }
    
    public function addInterest(){
        
    }
    
    public function removeInterest(){
        
    }
}
