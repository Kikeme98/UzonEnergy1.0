<?php

require_once((__FILE__)."../../controlador/BalastrosDAO.php");

$data = BalastrosDAO::getInstance()->listarBalastros();
echo json_encode($data);

?>