<?php

require_once((__FILE__)."../../controlador/UsuariosDAO.php");

$data = UsuariosDAO::getInstance()->listarUsuarios();
echo json_encode($data);

?>