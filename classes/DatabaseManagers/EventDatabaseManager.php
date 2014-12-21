/*
* Description of EventdatabaseManager
*
* @author Bakary Diarra
*/
<?php
require('../Event/Event.php');
class EventDatabaseManager extends DatabaseManager{
    private $connection;
	
    public function __construct() {
       $this->connection = connectToDB();
		if(is_null($this->connection))
		{
			for($i = 0; $i<3; $i++)
			{	
				$this->connection = connectToDB();
				if(!is_null($this->connection)){
					break;
				}
			}
			if(is_null($this->connection)){
					echo "Sorry we could not connect to the database. please try later";
				}
		}
    }
    
	public function __destruct()
	{
		$this->disconnectFromDB();
	}
	
    public function getEvent($EventID){
			$sql = "select EVENT_NAME,DESCRIPTION,TICKETDATE,STARTTIME,ENDTIME,NUMBEROFTICKET, from event where EVENTID=$EventID";
			$RESULT = mysqli_query($this->connection,$sql);
			if(mysql_affected_rows($RESULT))
			 return $RESULT;
        	return NULL;
    }
    
    public function saveEvent($Event)
    {
		//$sql = "insert into event VALUES()";
    }
    
    public function joinEvent($EventID, $userID)
    {
		$sql = "insert into attendees(USERID,EVENTID) values($userID, $EventID)";
		$result = mysqli_query($this->connection, $sql);
		if(mysql_affected_rows($result))
			return true;
		return false;
    } 
    
    public function leaveEvent($EventID, $userID)
    {
		$sql = "delete * from attendees where USERID=$userID, EVENTID=$EventID";
		$result = mysqli_query($this->connection, $sql);
		if(mysql_affected_rows($result))
			return true;
        return false;
    }
    
    public function deleteEvent($EventID, $userID)
    {
        $sql = "delete * from event where EVENTID=$EventID and USERID=$userID";
		$result = mysqli_query($this->connection, $sql);
		if(mysql_affected_rows($result))
			return true;
		return false;
    }
    
    public function getRecentEvents($date)
    {
        $sql = "select * from event where TICKETDATE=$date";
		$result = mysqli_query($this->connection, $sql);
		if(mysqli_affected_rows($result))
			return $result;
		return null;
    }
    
    public function getCreatedEventsByUserID($userID)
    {
        
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
         $dbServer = "localhost";
		$DBname = "eventmanager";
		$username = "root";
		$password = "";
		$con = mysqli_connect("$dbServer", "$username","$password","$DBname");
		if($con)
		{
			return $con;
		}
		else
		{
			echo "Couldn't connect to the server.";
			return null;
		}
    }

    public function disconnectFromDB() {
        mysqli_close($this->connection); 
    }

}
