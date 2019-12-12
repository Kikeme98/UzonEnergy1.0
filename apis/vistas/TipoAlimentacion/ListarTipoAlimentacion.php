<?php

require_once(dirname(__FILE__)."/../../controlador/TipoAlimentacionDAO.php");

$data = TipoAlimentacionDAO::getInstance()->listarTipoAlimentacion();
echo json_encode($data);

?>