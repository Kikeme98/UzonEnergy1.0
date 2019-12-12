<?php

require_once(dirname(__FILE__)."/../../controlador/PostesDAO.php");

$data = PostesDAO::getInstance()->listarPostes();
echo json_encode($data);

?>