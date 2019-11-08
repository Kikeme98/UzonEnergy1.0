<?php
 require_once(dirname(__FILE__)."./db/db.php");

class TipoAlimentacionDAO{
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

  public function InsertarTipoAlimentacion($params){

  }

  public function listarTipoAlimentacion(){
    $_query = "SELECT * from tipo_alimentacion";
    $result = $db->query($_query);
    $data = array();
    while($row = mysqli_fetch_assoc($result))$data = $row;
    return $data;
  }

}

?>