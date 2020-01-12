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
    $latitudPosicion=$params['latitudPosicion'];
    $longitudPosicion=$params['longitudPosicion'];
    $pos_xPosicion=$params['pos_xPosicion'];
    $pos_yPosicion=$params['pos_yPosicion'];
    $foto=$params['fotoPosicion'];
    $fecha_censoPosicion=$params['fecha_censoPosicion'];
    $query = "INSERT INTO posicion_poste (latitud, longitud, pos_x, pos_y, foto, fecha_censo) VALUES ('$latitudPosicion', '$longitudPosicion', '$pos_xPosicion', '$pos_yPosicion', '$fotoPosicion', '$fecha_censoPosicion')";
	  $resultado = mysqli_query(self::$db, $query);
    if($resultado){
      mysqli_close(self::$db);
      return 1;
    }else{
      mysqli_close(self::$db);
      return 0;
    }
  }

  public function listarPosicionPoste(){
    $_query = "SELECT * from posicion_poste";
    $result = self::$db->query($_query);
    $data = array();
    while($row = mysqli_fetch_assoc($result))$data[] = $row;
    return $data;
  }

}

public function EliminarPosicionPoste($params){
  $idPosicionPoste=$params['idPosicionPoste'];
  $query = "DELETE FROM posicion_poste WHERE ('id'='$idPosicionPoste')";
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