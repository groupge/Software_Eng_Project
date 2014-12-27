<?php
include './SetingsView.php';
include './Settings.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SettingsController
 *
 * @author dave_pc
 */
class SettingsController {
    private $currentUserId;
    private $UserDBM;




    public function __construct($currentUserID ,$UserDM) {
        $this->currentUserId = $currentUserID;
        $this->UserDBM = $UserDM;
    }
    
    public function loadSettingsData(){
        
    }
    
    public function updateName($name){
        return TRUE; 
    }
    
    public function updateMail($mail){
        return TRUE;
    }
    
    public function updateBio($bio){
        return TRUE;
    }
    
    public function addCity($city){
        return TRUE;
    }
    
    public function removeCity($city){
        return TRUE;
    }
    
    public function getName(){
        
    }
    
    public function getMail(){
        
    }
    
    public function getBio(){
        
    }
    
    public function getCities(){
        
    }
}
