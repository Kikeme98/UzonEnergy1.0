<?php

include 'util/conn.php';
	
	// if connection fail, cancel connection attempt
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	//read data into variables
    $idBrazos= $_POST['idBrazos'];
    $longitudBrazos=$_POST['longitudBrazos'];
    $inclinacionBrazos=$_POST['inclinacionBrazos'];

	//query save into DB
    $query = "INSERT INTO brazos (id, longitud, inclinacion) VALUES ('$idBrazos', '$longitudBrazos', '$inclinacionBrazos')";

	mysqli_query($conn, $query);

		//close connection
	mysqli_close($conn);

?>