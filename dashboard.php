<!DOCTYPE html>
<html>
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
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
<body class="container-fluid">
	<header>
		<div class="head">
			<h2> Ami Online Academy </h2>
			<ul>
				<li><a href="#classes">CLasses</a></li>
				<li><a href="#speaking">Speaking Tests</a></li>
				<li><a href="#cards">Report Cards</a></li>
				<li><a href="#salary">Salary Report</a></li>
				<li><a href="#announcement">Announcements</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
		<div class="foot">
			<?php require_once ('footer.php') ?>
		</div>	
	</header>
	
	<div id="classes" class="main col-xs-12">
		<?php require_once ('class_list.php') ?>
	</div>
	<div id="speaking" class="main">
		<?php require_once ('speaking_eval.php'); 
		require_once ('report_card.php'); ?>
	</div>
	<div id="cards" class="main">
		
	</div>
	<div id="salary" class="main">
		
	</div>
	<div id="announcement" class="main">
		<?php require_once ('announcement.php') ?>
	</div>
	
	
</body>
</html>