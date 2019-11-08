<?php

require_once((__FILE__)."../../controlador/PosicionPosteDAO.php");

$data = PosicionPosteDAO::getInstance()->listarPosicionPoste();
echo json_encode($data);

?>