<?php

require_once(dirname(__FILE__)."/../../controlador/BalastrosDAO.php");

$data = BalastrosDAO::getInstance()->listarBalastros();
echo json_encode($data);

?>