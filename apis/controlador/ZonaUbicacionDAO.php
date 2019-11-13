<?php
 require_once(dirname(__FILE__)."./db/db.php");

class ZonaUbicacionDAO{
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

  public function InsertarZonaUbicacion($params){
    $calleZona= $params['calleZona'];
    $coloniaZona= $params['coloniaZona'];
    $delegacionZona= $params['delegacionZona'];
    $query = "INSERT INTO zona_ubicacion (calle, colonia, delegacion) VALUES ('$calleZona', '$coloniaZons', '$delegacionZona')";
	  mysqli_query($conn, $query);
	  mysqli_close($conn);
  }

  public function listarZonaUbicacion(){
    $_query = "SELECT * from zona_ubicacion";
    $result = $db->query($_query);
    $data = array();
    while($row = mysqli_fetch_assoc($result))$data = $row;
    return $data;
  }

}

?>