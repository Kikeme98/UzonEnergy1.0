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
    $alimentacion= $params['alimentacion'];
    $transformadorAlimentacion= $params['transformadorAlimentacion'];
    $medidorAlimentacion= $params['medidorAlimentacion'];
    $query = "INSERT INTO tipo_alimentacion (alimentacion, transformador, medidor) VALUES ('$alimentacion', '$transformadorAlimentacion, '$medidorAlimentacion')";
	  $resultado = mysqli_query(self::$db, $query);
    if($resultado){
      mysqli_close(self::$db);
      return 1;
    }else{
      mysqli_close(self::$db);
      return 0;
    }
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