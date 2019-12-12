<?php
 require_once(dirname(__FILE__)."./db/db.php");

class RpusDAO{
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

  public function InsertarRpu($params){
    $tipoRpu= $params['tipoRpu'];
    $tarifaRpu= $params['tarifaRpu'];
    $totalRpu= $params['totalRpu'];
    $query = "INSERT INTO rpus (tipo, tarifa, total) VALUES ('$tipoRpu', '$tarifaRpu', '$totalRpu')";
	  $resultado = mysqli_query(self::$db, $query);
    if($resultado){
      mysqli_close(self::$db);
      return 1;
    }else{
      mysqli_close(self::$db);
      return 0;
    }

  }

  public function listarRpus(){
    $_query = "SELECT * from rpus";
    $result = self::$db->query($_query);
    $data = array();
    while($row = mysqli_fetch_assoc($result))$data[] = $row;
    return $data;
  }

}

?>