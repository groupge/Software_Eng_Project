<?php

class Ticket {
    private $price; //double;
    private $owner; //User
    private $EventName ;//String
    private $date; //date
    private $serialNumber; //String
    
    public function __construct() {
        $this->price = 0.0;
        $this->EventName = "";
        $this->owner = NULL;
        $this->date = NULL;
        $this->serialNumber = "";
    }
    
    public function setPrice($price)
    {
         $this->price = $price;
    }
    
    public function setEventName($eventName)
    {
         $this->EventName = $eventName;
    }
    
    public function setOwner($userObj)
    {
        $this->owner = $userObj;
    }
    
    public function setDate($date)
    {
        $this->date = $date;
    }
    
    public function setSerialNumber($sn)
    {
        $this->serialNumber = $sn;
    }
    public function getPrice()
    {
        return $this->price;
    }
    
    public function getEventName()
    {
        return $this->EventName;
    }
    
    public function getOwner()
    {
        return $this->owner;
    }
    
    public function getDate()
    {
        return $this->date;
    }
    
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }
}
