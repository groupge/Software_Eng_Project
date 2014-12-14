<?php
include './PreferencesController.php';
include './PreferencesView.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Preferences
 *
 * @author dave_pc
 */
class Preferences {
    private $mailReminder;
    private $notiReminder;
    private $prefCtrl;

    public function __construct($mailRemind, $notiRemind, $preferCtrl) {
        $this->mailReminder = $mailRemind;
        $this->notiReminder = $notiRemind;
        $this->prefCtrl = $preferCtrl;
    }
    
    public function setMailReminder($mail){
        $this->mailReminder = $mail;
    }
    
    public function setNotiReminder($noti){
        $this->notiReminder = $noti;
    }
    
    public function getMailReminder(){
        return $this->mailReminder;
    }
    
    public function getNotiReminder(){
        return $this->notiReminder;
    }
}
