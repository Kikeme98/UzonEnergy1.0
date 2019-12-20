<?php
require_once(dirname(__FILE__)."/../../controlador/PosicionPosteDAO.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $json = json_decode($_POST['json'], true);
    $params = $json;
    $respuesta = PosicionPosteDAO::getInstance()->InsertarPosicionPoste($params);
    if($respuesta){
        echo json_encode(['response'=>1, 'mensaje'=> "Insertado Correctamente"]);
    }else{
        echo json_encode(['response'=>0, 'mensaje'=> "Error"]);
    }
}else{
    echo json_encode(['response'=>0, 'mensaje'=> "Metodo Incorrecto"]);
}?>