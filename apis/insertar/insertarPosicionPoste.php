<?php

include 'util/conn.php';
	
	// if connection fail, cancel connection attempt
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	//read data into variables
    $idPosicion= $_POST['idPosicion'];
    $latitudPosicion=$_POST['latitudPosicion'];
    $longitudPosicion=$_POST['longitudPosicion'];
    $pos_xPosicion=$_POST['pos_xPosicion'];
    $pos_yPosicion=$_POST['pos_yPosicion'];
    $foto=$_POST['fotoPosicion'];
    $fecha_censoPosicion=$_POST['fecha_censoPosicion'];

	//query save into DB
    $query = "INSERT INTO posicion_poste (id, latitud, longitud, pos_x, pos_y, foto, fecha_censo) VALUES ('$idPoste', '$latitudPosicion', '$longitudPosicion', '$pos_xPosicion', '$pos_yPosicion', '$fotoPosicion', '$fecha_censoPosicion')";

	mysqli_query($conn, $query);

		//close connection
	mysqli_close($conn);

?>