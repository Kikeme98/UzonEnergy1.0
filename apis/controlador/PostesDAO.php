<?php
 require_once(dirname(__FILE__)."./db/db.php");

class PostesDAO{
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

  public function InsertarPoste($params){
    $tipoPostes= $params['tipoPostes'];
    $altura_mtsPostes= $params['alturaPostes'];
    $arreglo_basePostes= $params['arreglo_basePost'];
    $brazoPostes= $params['brazoPost'];
    $posicionPostes= $params['posicionPost'];
    $query = "INSERT INTO postes (tipo, altura_mts, arreglo_base, brazo, posicion) VALUES ('$tipoPostes', $altura_mtsPostes, '$arreglo_basePostes', '$brazoPostes', '$posicionPostes')";
	  $resultado = mysqli_query(self::$db, $query);
    if($resultado){
      mysqli_close(self::$db);
      return 1;
    }else{
      mysqli_close(self::$db);
      return 0;
    }
  }

  public function listarPostes(){
    $_query = "SELECT * from postes";
    $result = $db->query($_query);
    $data = array();
    while($row = mysqli_fetch_assoc($result))$data = $row;
    return $data;
  }

}

?>