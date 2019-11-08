<?php

require_once((__FILE__)."../../controlador/RpusDAO.php");

$data = RpusDAO::getInstance()->listarRpus();
echo json_encode($data);

?>