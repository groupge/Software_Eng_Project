<?php
include './SetingsView.php';
include './SettingsController.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Settings
 *
 * @author dave_pc
 */
class Settings {
    private $Name;
    private $Mail;
    private $Bio;
    Private $Cities;
    private $SettCtrl;


    public function __construct($SettCtrl) {
        $this->SettCtrl = $SettCtrl;
        $this->Name = "";
        $this->Mail = "";
        $this->Bio = "";
        $this->Cities = "";
    }
    
    public function setName($uName){
        $this->Name = $uName;
    }
    
    public function setMail($uMail){
        $this->Mail = $uMail;
    }
    
    public function setBio($uBio){
        $this->Bio = $uBio;
    }
    
    public function setCities($uCities){
        $this->Cities = $uCities;
    }
    
    public function getName(){
        return $this->Name;
    }
    
    public function getMail(){
        return $this->Mail;
    }
    
    public function getBio(){
        return $this->Bio;
    }
    
    public function getCities(){
        return $this->Cities;
    }
}
