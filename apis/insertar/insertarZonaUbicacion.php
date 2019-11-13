<?php

include 'util/conn.php';
	
	// if connection fail, cancel connection attempt
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	//read data into variables
    $idZona= $_POST['idZona'];
    $calleZona= $_POST['calleZona'];
    $coloniaZona= $_POST['coloniaZona'];
    $delegacionZona= $_POST['delegacionZona'];

	//query save into DB
    $query = "INSERT INTO zona_ubicacion (id, calle, colonia, delegacion) VALUES ('$idZona', '$calleZona', '$coloniaZons', '$delegacionZona')";

	mysqli_query($conn, $query);

		//close connection
	mysqli_close($conn);

?>