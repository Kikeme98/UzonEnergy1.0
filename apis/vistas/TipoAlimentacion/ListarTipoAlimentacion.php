<?php

require_once((__FILE__)."../../controlador/TipoAlimentacionDAO.php");

$data = TipoAlimentacionDAO::getInstance()->listarTipoAlimentacion();
echo json_encode($data);

?>