<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");

if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}
?>
<html>
<head>
	<title>Snake Game</title>
	<link rel="shortcut icon" href="image/icon.ico">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<body>

	<div class="snake__game">
		<div class="game__canvas">
			<canvas id= "snake" height="608" width="608"></canvas>
		</div>
		
		<div class="game__score">
			<div id="scoring" class="points">Score: 0</div>
		</div>	
		<div id="end" class="gameover"></div>
	</div>

	
	
	<script type="text/javascript" src="snake.js"></script>
</body>
</html>