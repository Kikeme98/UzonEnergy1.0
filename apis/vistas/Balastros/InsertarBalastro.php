<?php
require_once(dirname(__FILE__)."/../../controlador/BalastrosDAO.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $json = json_decode($_POST['json'], true);
    $params = $json;
    $respuesta = BalastrosDAO::getInstance()->InsertarBalastro($params);
    if($respuesta){
        echo json_encode(['response'=>1, 'mensaje'=> "insertado correctamente"]);
    }else{
        echo json_encode(['response'=>0, 'mensaje'=> "error"]);
    }
}else{
    echo json_encode(['response'=>0, 'mensaje'=> "metodo incorrecto"]);
}