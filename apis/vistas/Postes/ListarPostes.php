<?php

require_once((__FILE__)."../../controlador/PostesDAO.php");

$data = PostesDAO::getInstance()->listarPostes();
echo json_encode($data);

?>