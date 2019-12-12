<?php

require_once(dirname(__FILE__)."/../../controlador/UsuariosDAO.php");

$data = UsuariosDAO::getInstance()->listarUsuarios();
echo json_encode($data);

?>