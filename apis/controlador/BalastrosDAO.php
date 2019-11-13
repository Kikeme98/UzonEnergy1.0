<?php
 require_once(dirname(__FILE__)."./db/db.php");

class BalastrosDAO{
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

  public function InsertarBalastro($params){
    $tipoBalastros=$params['tipoBalastros'];
    $factorBalastros=$params['factorBalastros'];
    $query = "INSERT INTO balastros (tipo, factor) VALUES ('$tipoBalastros', '$factorBalastros')";
    mysqli_query($conn, $query);
    if(){

    }
	  mysqli_close($conn);
  }

  public function listarBalastros(){
    $_query = "SELECT * from balastros";
    $result = $db->query($_query);
    $data = array();
    while($row = mysqli_fetch_assoc($result))$data = $row;
    return $data;
  }

}

?>