<?php

class EventDatabaseManager extends DatabaseManager{
    
    public function __construct() {
       
    }
    
    public function getEvent($EventID){
        //return query result
        return NULL;
    }
    
    public function saveEvent($Event)
    {
        return TRUE;
    }
    
    public function joinEvent($EventID, $userID)
    {
        return true;
    } 
    
    public function leaveEvent($EventID, $userID)
    {
        return true;
    }
    
    public function deleteEvent($EventID, $userID)
    {
        return TRUE;
    }
    
    public function getRecentEvents($date)
    {
        // return query result
        return NULL;
    }
    
    public function getCreatedEventsByUserID($userID)
    {
        //return query result
        return null;
    }
    
    public function getJoinedEventsByUserID($userID)
    {
        //return query result
        return NULL;
    }
    
    public function getEventByName($name)
    {
        ///return the query result
        return NULL;
    }

    public function connectToDB() {
        //stablish the connection to the database;
    }

    public function disconnectFromDB() {
        //disconnect from the database 
    }

}
