<?php

class UserDatabaseManager extends DatabaseManager {
    
    public function __construct() {
    }
    
    public function getNotificationStatus($UID)
    {
        return true;
    }
    
    public function setNotificationStatus($UID, $set)
    {
        return true;
    }
    
    public function getMailReminderStatus($UID)
    {
        return true;
    }
    
    public function setMailReminderStatus($UID, $set)
    {
        return true;
    }
    
    public function setName($name, $UID)
    {
        return true;
    }
    public function setMail($mail, $UID)
    {
        return true;
    }
    
    public function setBio($bio, $UID)
    {
        return true;
    }
    
    public function addCity($cityName, $UID)
    {
        return true;
    }
    public function removeCity($cityName, $UID)
    {
        return true;
    }
    
    public function getCities($UID)
    {
        return null;
    }
    
    public function getName($UID)
    {
        return "";
    }
    public function getMail($UID)
    {
        return "";
    }
    
    public function getBio($UID)
    {
        return "";
    }
    
    public function getInterests($UID)
    {
        return null;
    }
    public function addInterest($EventCatgry, $UID)
    {
        return true;
    }
    public function removeInterest($EventCatgry, $UID)
    {
        return true;
    }
    
    public function addTicket($Tckts, $UID)
    {
        return true;
    }
    
    public function getTickets($UID)
    {
        return null;
    }
    
    public function followUser($UID, $followerID)
    {
        return true;
    }
    
    public function getFollowersNames($UID)
    {
        return null;
    }
    
    public function getFollowingName($UID)
    {
        return null;
    }
    
    public function getUserByMail($mail, $pass)
    {
        return 0;
    }
    
    public function addNewUser($mail, $pass)
    {
        return true;
    }

    public function connectToDB() {
        
    }

    public function disconnectFromDB() {
        
    }

}
