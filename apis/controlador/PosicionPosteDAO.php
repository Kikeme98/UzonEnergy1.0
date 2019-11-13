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
	  mysqli_query($conn, $query);
	  mysqli_close($conn);
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