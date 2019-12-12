<?php

require_once(dirname(__FILE__)."/../../controlador/LuminariasDAO.php");

$data = LuminariasDAO::getInstance()->listarLuminarias();
echo json_encode($data);

?>