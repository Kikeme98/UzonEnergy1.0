<?php

include 'util/conn.php';
	
	// if connection fail, cancel connection attempt
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	//read data into variables
    $idPostes= $_POST['idPostes'];
    $tipoPostes= $_POST['tipoPostes'];
    $altura_mtsPostes= $_POST['alturaPostes'];
    $arreglo_basePostes= $_POST['arreglo_basePost'];
    $brazoPostes= $_POST['brazoPost'];
    $posicionPostes= $_POST['posicionPost'];

	//query save into DB
    $query = "INSERT INTO postes (id, tipo, altura_mts, arreglo_base, brazo, posicion) VALUES ('$idPostes', '$tipoPostes', '$altura_mtsPostes', '$arreglo_basePostes', '$brazoPostes', '$posicionPostes')";

	mysqli_query($conn, $query);

		//close connection
	mysqli_close($conn);

?>