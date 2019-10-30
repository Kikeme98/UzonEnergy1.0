<?php

require_once((__FILE__)."../../controlador/LuminariasDAO.php");

$data = LuminariasDAO::getInstance()->listarLuminarias();
echo json_encode($data);

?>