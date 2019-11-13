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
	  mysqli_query($conn, $query);
	  mysqli_close($conn);

  }

  public function listarRpus(){
    $_query = "SELECT * from rpus";
    $result = $db->query($_query);
    $data = array();
    while($row = mysqli_fetch_assoc($result))$data = $row;
    return $data;
  }

}

?>