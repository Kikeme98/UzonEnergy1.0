<?php 
include("conn.php");
class db{
  private static $connection;
  private static $db;
  private $_host	= "localhost:3310";	  
  private $_user	= "root";		  
  private $_pass	= "";		    
  private $_database	= "sistemaene";   

  private function __construct(){
    $this->_connection = new mysqli($this->_host, $this->_username, 
			$this->_password, $this->_database);
		if(mysqli_connect_error()) {
			trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
				 E_USER_ERROR);
		}
  }

  public static function getInstance(){
    if(self::$connection == null)
          self::$connection = new self();

    return self::$connection;
  }

  public function getConnection() {
		return $this->_connection;
	}
}
  
