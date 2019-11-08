<?php

require_once((__FILE__)."../../controlador/BrazosDAO.php");

$data = BrazosDAO::getInstance()->listarBrazos();
echo json_encode($data);

?>