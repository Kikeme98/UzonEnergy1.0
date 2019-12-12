<?php

require_once(dirname(__FILE__)."/../../controlador/RpusDAO.php");

$data = RpusDAO::getInstance()->listarRpus();
echo json_encode($data);

?>