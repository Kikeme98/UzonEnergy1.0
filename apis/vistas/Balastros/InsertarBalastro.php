<?php
require_once((__FILE__)."../../controlador/BalastrosDAO.php");
if($_REQUEST['method']=='POST'){
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