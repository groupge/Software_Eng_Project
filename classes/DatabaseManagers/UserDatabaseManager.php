<?php

class UserDatabaseManager extends DatabaseManager {
    private $connection ;
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
	
    public function getNotificationStatus($UID)
    {
		$sql = "SELECT NOTIFREMINDER from user where USERID=$UID";
		$result = mysqli_query($this->connection,$sql);
		if(mysql_num_rows($result)>0)
		{
        	return $result;
		}
		else
		{
			return null;
			}
    }
    
    public function setNotificationStatus($UID, $set)
    {
		$sql = "UPDATE user SET NOTIFREMINDER=$set WHERE USERID=$UID";
		$result = mysqli_query($this->connection, $sql);
		if(mysql_affected_rows($result)>0)
        return true;
		else
		return false;
    }
    
    public function getMailReminderStatus($UID)
    {
        $sql = "SELECT MAILREMINDER from user where USERID=$UID";
		$result = mysqli_query($this->connection,$sql);
		if(mysql_num_rows($result)>0)
		{
        	return $result;
		}
		else
		{
			return null;
			}
    }
    
    public function setMailReminderStatus($UID, $set)
    {
        $sql = "UPDATE user SET MAILREMINDER=$set WHERE USERID=$UID";
		$result = mysqli_query($this->connection, $sql);
		if(mysql_affected_rows($result)>0)
        return true;
		else
		return false;
    }
    
    public function setName($FirstName, $LastName, $UID)
    {
       $sql = "UPDATE user SET FIRST_NAME=$FirstName, LAST_NAME=$LastName WHERE USERID=$UID";
		$result = mysqli_query($this->connection, $sql);
		if(mysql_affected_rows($result)>0)
        return true;
		else
		return false;
    }
    public function setMail($mail, $UID)
    {
        $sql = "UPDATE user SET MAIL=$mail WHERE USERID=$UID";
		$result = mysqli_query($this->connection, $sql);
		if(mysql_affected_rows($result)>0)
        return true;
		else
		return false;
    }
    
    public function setBio($bio, $UID)
    {
        $sql = "UPDATE user SET BIO=$bio WHERE USERID=$UID";
		$result = mysqli_query($this->connection, $sql);
		if(mysql_affected_rows($result)>0)
        return true;
		else
		return false;
    }
    
    public function addAddress($country,$cityName, $zip, $street, $doorNumber)
    {
         $SQL = "insert into address(COUNTRY, CITY, ZIPCODE, STREET, DOORNUMBER) values('$country', '$cityName', $zip, '$street', $doorNumber)";
		$RESULT = mysqli_query($this->connection. $SQL);
		if(mysqli_affected_rows($RESULT)>0)
		{
			return true;
			}
		else
		{	
		return false;
			}
    }
    public function removeAddress($zipcode, $UID)
    {
         $SQL = "delete address where address.ZIPCODE = '$zipcode' AND ADDRESSID in (select ADDRESSID from user where USERID=$UID)";
		$RESULT = mysqli_query($this->connection. $SQL);
		if(mysqli_affected_rows($RESULT)>0)
		{
			return true;
			}
		else
		{	
		return false;
			}
    }
    
    public function getCities($UID)
    {
        $sql = "SELECT CITY from address,user where user.USERID=$UID and user.ADDRESSID = address.ADDRESSID";
		$result = mysqli_query($this->connection,$sql);
		if(mysql_num_rows($result)>0)
		{
        	return $result;
		}
		else
		{
			return null;
			}
    }
    
    public function getName($UID)
    {
        $sql = "SELECT FIRST_NAME, LAST_NAME from user where USERID=$UID";
		$result = mysqli_query($this->connection,$sql);
		if(mysql_num_rows($result)>0)
		{
        	return $result;
		}
		else
		{
			return null;
			}
    }
    public function getMail($UID)
    {
		$sql = "SELECT MAIL from user where USERID=$UID";
		$result = mysqli_query($this->connection,$sql);
		if(mysql_num_rows($result)>0)
		{
        	return $result;
		}
		else
		{
			return null;
			}
    }
    
    public function getBio($UID)
    {
		$sql = "SELECT BIO from user where USERID=$UID";
		$result = mysqli_query($this->connection,$sql);
		if(mysql_num_rows($result)>0)
		{
        	return $result;
		}
		else
		{
			return null;
			}
    }
    
    public function getInterests($UID)
    {
		$sql = "SELECT * from interests where USERID=$UID";
		$result = mysqli_query($this->connection,$sql);
		if(mysql_num_rows($result)>0)
		{
        	return $result;
		}
		else
		{
			return null;
			}
    }
    public function addInterest($EventCatgry, $UID)
    {
         $SQL = "update interests set $EventCatgry=1 where interest.USERID=$UID";
		$RESULT = mysqli_query($this->connection. $SQL);
		if(mysqli_affected_rows($RESULT)>0)
		{
			return true;
			}
		else
		{	
		return false;
			}
    }
    public function removeInterest($EventCatgry, $UID)
    {
       $SQL = "update interests set $EventCatgry=0 where interest.USERID=$UID";
		$RESULT = mysqli_query($this->connection. $SQL);
		if(mysqli_affected_rows($RESULT)>0)
		{
			return true;
			}
		else
		{	
		return false;
			}
    }
    
    public function addTicket($TcktsdATE, $price, $EVENTID, $UID)
    {
		$SQL = "INSERT INTO ticket(EVENTID,USERID,PRICE,TICKETDATE) values($EVENTID,$UID,$price,$TcktsdATE)";
		$RESULT = mysqli_query($this->connection. $SQL);
		if(mysqli_affected_rows($RESULT)>0)
		{
			return true;
			}
		else
		{	
		return false;
			}
    }
    
    public function getTickets($UID)
    {
		$sql = "SELECT SERIALNUMBER,EVENTID,TICKETDATE,PRICE from ticket,user
				 where ticket.USERID=$UID";
		$result = mysqli_query($this->connection,$sql);
		if(mysql_num_rows($result)>0)
		{
        	return $result;
		}
		else
		{
			return null;
			}
    }
    
    public function followUser($UID, $followerID)
    {
        return true;
    }
    
    public function getFollowersNames($UID)
    {
        $sql = "SELECT FIRST_NAME,LAST_NAME from user WHERE USERID IN
				(SELECT USE_USERID FROM followers where USERID=$UID)";
		$result = mysqli_query($this->connection,$sql);
		if(mysql_num_rows($result)>0)
		{
        	return $result;
		}
		else
		{
			return null;
			}
    }
    
    public function getFollowingName($UID)
    {
        $sql = "SELECT FIRST_NAME,LAST_NAME from user WHERE USERID IN
				(SELECT USE_USERID FROM following where USERID=$UID)";
		$result = mysqli_query($this->connection,$sql);
		if(mysql_num_rows($result)>0)
		{
        	return $result;
		}
		else
		{
			return null;
			}
    }
    
    public function getUserByMail($mail, $pass)
    {
       $sql = "SELECT * from user WHERE MAIL='$mail' AND PASSWORD='$pass'";
		$result = mysqli_query($this->connection,$sql);
		if(mysql_num_rows($result)>0)
		{
        	return $result;
		}
		else
		{
			return null;
			}
    }
    
    public function addNewUser($mail, $pass)
    {
        return true;
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
