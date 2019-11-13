<?php

include 'util/conn.php';
	
	// if connection fail, cancel connection attempt
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	//read data into variables
    $idBalastros= $_POST['idBalastros'];
    $tipoBalastros=$_POST['tipoBalastros'];
    $factorBalastros=$_POST['factorBalastros'];

	//query save into DB
    $query = "INSERT INTO balastros (id, tipo, factor) VALUES ('$idBalastros', '$tipoBalastros', '$factorBalastros')";

	mysqli_query($conn, $query);

		//close connection
	mysqli_close($conn);

?>