<?php 

// Hostname changes depending on host, where you can also setup own username and password

	$host = 'localhost';
	$username ='root';
	$password ='';
	$database ='shau';

	$conn = mysqli_connect($host, $username, $password, $database);

// top upto here, usually separated as one php file for connection

?>