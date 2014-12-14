<?php
include './Preferences.php';
include './PreferencesController.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PreferencesView
 *
 * @author dave_pc
 */
class PreferencesView implements AbstractView{
    private $PrefCtrl;
    
    public function __construct($PrefControl) {
        $this->PrefCtrl = $PrefControl;
    }

    public function toggleNotiState(){
        
    }
    
    public function toggleMailReminderState(){
        
    }

    public function initView() {
        
    }

    public function saveData() {
        
    }

}
