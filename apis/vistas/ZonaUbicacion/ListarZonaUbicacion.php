<?php

require_once((__FILE__)."../../controlador/ZonaUbicacionDAO.php");

$data = ZonaUbicacionDAO::getInstance()->listarZonaUbicacion();
echo json_encode($data);

?>