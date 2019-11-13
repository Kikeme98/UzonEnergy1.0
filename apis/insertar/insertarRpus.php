<?php

include 'util/conn.php';
	
	// if connection fail, cancel connection attempt
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	//read data into variables
    $idRpu= $_POST['idRpu'];
    $tipoRpu= $_POST['tipoRpu'];
    $tarifaRpu= $_POST['tarifaRpu'];
    $totalRpu= $_POST['totalRpu'];

	//query save into DB
    $query = "INSERT INTO rpus (id, tipo, tarifa, total) VALUES ('$idRpu', '$tipoRpu', '$tarifaRpu', '$totalRpu')";

	mysqli_query($conn, $query);

		//close connection
	mysqli_close($conn);

?>