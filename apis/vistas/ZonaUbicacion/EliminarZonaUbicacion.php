<?php
require_once(dirname(__FILE__)."/../../controlador/ZonaUbicacionDAO.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $json = json_decode($_POST['json'], true);
    $params = $json;
    $respuesta = ZonaUbicacionDAO::getInstance()->EliminarZonaUbicacion($params);
    if($respuesta){
        echo json_encode(['response'=>1, 'mensaje'=> "Eliminado Correctamente"]);
    }else{
        echo json_encode(['response'=>0, 'mensaje'=> "Error"]);
    }
}else{
    echo json_encode(['response'=>0, 'mensaje'=> "Metodo Incorrecto"]);
}?>