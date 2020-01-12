<?php
 require_once(dirname(__FILE__)."./db/db.php");

class LuminariasDAO{
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

  public function InsertarLuminaria($params){

  }

  public function listarLuminarias(){
    $_query = "SELECT * from luminarias";
    $result = self::$db->query($_query);
    $data = array();
    while($row = mysqli_fetch_assoc($result))$data[] = $row;
    return $data;
  }

}

public function EliminarLuminaria($params){
  $idLuminarias=$params['idLuminarias'];
  $query = "DELETE FROM luminarias WHERE ('id'='$idLuminarias')";
  $resultado = mysqli_query(self::$db, $query);
  if($resultado){
    mysqli_close(self::$db);
    return 1;
  }else{
    mysqli_close(self::$db);
    return 0;
  }
  
}

?>


