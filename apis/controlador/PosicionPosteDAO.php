<?php
 require_once(dirname(__FILE__)."./db/db.php");

class PosicionPosteDAO{
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

  public function InsertarPosicionPoste($params){

  }

  public function listarPosicionPoste(){
    $_query = "SELECT * from posicion_poste";
    $result = $db->query($_query);
    $data = array();
    while($row = mysqli_fetch_assoc($result))$data = $row;
    return $data;
  }

}

?>