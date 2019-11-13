<?php

include 'util/conn.php';
	
	// if connection fail, cancel connection attempt
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	//read data into variables
    $idAlimentacion= $_POST['idAlimentacion'];
    $alimentacion= $_POST['alimentacion'];
    $transformadorAlimentacion= $_POST['transformadorAlimentacion'];
    $medidorAlimentacion= $_POST['medidorAlimentacion'];

	//query save into DB
    $query = "INSERT INTO tipo_alimentacion (id, alimentacion, transformador, medidor) VALUES ('$idAlimentacion', '$alimentacion', '$transformadorAlimentacion, '$medidorAlimentacion')";

	mysqli_query($conn, $query);

		//close connection
	mysqli_close($conn);

?>