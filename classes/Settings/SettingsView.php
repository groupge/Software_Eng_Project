<?php
include './Settings.php';
include './SettingsController.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SetingsView
 *
 * @author dave_pc
 */
class SetingsView implements AbstractView{
    private $SetCtrl;
    
    public function __construct($SettCtrl){
        $this->SetCtrl = $SettCtrl;
    }
    
    public function editName($SettCtrl){
        $this->SetCtrl = $SettCtrl;
    }
    public function editMail(){
        
    }
    
    public function editBio(){
        
    }
    
    public function addCity(){
        
    }
    
    public function removeCity(){
        
    }

    public function initView() {
        
    }

    public function saveData() {
        
    }

}
