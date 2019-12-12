<?php

require_once(dirname(__FILE__)."/../../controlador/PosicionPosteDAO.php");

$data = PosicionPosteDAO::getInstance()->listarPosicionPoste();
echo json_encode($data);

?>