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
    $query = "INSERT INTO zona_ubicacion (calle, colonia, delegacion) VALUES ('$calleZona', '$coloniaZona', '$delegacionZona')";
	  $resultado = mysqli_query(self::$db, $query);
    if($resultado){
      mysqli_close(self::$db);
      return 1;
    }else{
      mysqli_close(self::$db);
      return 0;
    }
  }

  public function listarZonaUbicacion(){
    $_query = "SELECT * from zona_ubicacion";
    $result = self::$db->query($_query);
    $data = array();
    while($row = mysqli_fetch_assoc($result))$data[] = $row;
    return $data;
  }

}

public function EliminarZonaUbicacion($params){
  $idZonaUbicacion=$params['idZonaUbicacion'];
  $query = "DELETE FROM zona_ubicacion WHERE ('id'='$idZonaUbicacion')";
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