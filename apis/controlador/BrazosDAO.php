<?php
 require_once(dirname(__FILE__)."./db/db.php");

class BrazosDAO{
  private static $dao;
  private static $db;

  private function __construct(){
      self::$db = db::getInstance()->getConnection();
  }

  public static function getInstance(){
    if(!self::$dao) { 
			self::$dao = new self();
		}
		return self::$dao;
  }

  public function InsertarBrazo($params){
    $longitudBrazos=$params['longitudBrazos'];
    $inclinacionBrazos=$params['inclinacionBrazos'];
    $query = "INSERT INTO brazos (longitud, inclinacion) VALUES ('$longitudBrazos', '$inclinacionBrazos')";
	  mysqli_query($conn, $query);
	  mysqli_close($conn);
  }

  public function listarBrazos(){
    $_query = "SELECT * from brazos";
    $result = $db->query($_query);
    $data = array();
    while($row = mysqli_fetch_assoc($result))$data = $row;
    return $data;
  }

}

?>