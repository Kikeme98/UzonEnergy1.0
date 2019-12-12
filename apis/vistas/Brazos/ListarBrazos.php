<?php

require_once(dirname(__FILE__)."/../../controlador/BrazosDAO.php");

$data = BrazosDAO::getInstance()->listarBrazos();
echo json_encode($data);

?>