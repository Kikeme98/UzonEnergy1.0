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
    $resultado = mysqli_query(self::$db, $query);
    if($resultado){
      mysqli_close(self::$db);
      return 1;
    }else{
      mysqli_close(self::$db);
      return 0;
    }
	  
  }

  public function listarBalastros(){
    $_query = "SELECT * from balastros";
    $result = self::$db->query($_query);
    $data = array();
    while($row = mysqli_fetch_assoc($result))$data[] = $row;
    return $data;
  }

}

public function EliminarBalastro($params){
  $idBalastros=$params['idBalastros'];
  $query = "DELETE FROM balastros WHERE ('id'='$idBalastros')";
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