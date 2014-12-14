<?php
include './Preferences.php';
include './PreferencesView.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PreferencesController
 *
 * @author dave_pc
 */
class PreferencesController {
    private $currentUserId;
    private $UserDBM;


    public function __construct($curUserId, $useDBM) {
        $this->currentUserId = $curUserId;
        $this->UserDBM = $useDBM;
    }
    
    public function loadPrefData(){
        
    }
    
    public function setNotiOn($bool){
        return TRUE;
    }
    
    public function setMailReminder($bool){
        return TRUE;
    }
    
    public function getNotiState($list){
        return TRUE;
    }
    
    public function getMailReminderState($list){
        return TRUE;
    }
}
