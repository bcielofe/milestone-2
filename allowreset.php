<?php

	$id = $_GET['id'];

	require('connection.php');
	$sql = "UPDATE teachers SET reset = 2 WHERE id = $id";
	mysqli_query($conn,$sql);

	header('location:teachers_admin.php');

?>