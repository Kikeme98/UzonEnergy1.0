<?php
 require_once(dirname(__FILE__)."./db/db.php");

class UsuariosDAO{
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

  public function InsertarUsuario($params){
    
  }

  public function listarUsuarios(){
    $_query = "SELECT * from usuarios";
    $result = self::$db->query($_query);
    $data = array();
    while($row = mysqli_fetch_assoc($result))$data[] = $row;
    return $data;
  }

}

public function EliminarUsuario($params){
  </*$idUsuario=$params['idUsuario'];
  $query = "DELETE FROM usuarios WHERE ('id'='$idUsuario')";
  $resultado = mysqli_query(self::$db, $query);
  if($resultado){
    mysqli_close(self::$db);
    return 1;
  }else{
    mysqli_close(self::$db);
    return 0;
  }*/>
  
}

?>