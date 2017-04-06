<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Ami Online Academy </title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Julee" rel="stylesheet">
	<!-- <link href="https://fonts.googleapis.com/css?family=Lakki+Reddy" rel="stylesheet"> -->
  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">	
</head>
<body class="container-fluid"> 
	<header class="row"> 
		<nav class="navbar navbar-fixed-top navbar-inverse">
			<?php require_once ('navbar_admin.php') ?>
		</nav>	
	</header>
	<main class="row" style="min-height: 600px">
		<div class="col-sm-4 enroll">
			<?php require_once ('add_class.php') ?>
		</div>
		<div class="col-sm-4 schedule">
			<?php require_once ('schedule.php') ?>
		</div>
		<div class="col-xs-12 class_list">
			<?php require_once ('class_list_admin.php') ?>
		</div>
	</main>
	<footer class="row">
		<?php require_once ('footer.php') ?>
	</footer> 
</body>
</html>