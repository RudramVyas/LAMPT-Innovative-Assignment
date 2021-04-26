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
	<title>Games</title>
	<style>
		.abs, h2:after, .cards .card figcaption, .cards .card:after, .news .card figcaption, .news .card:after, .news .article figcaption {
		 position: absolute;
	}
	 .rel, h2, h2 strong, .cards .card, .news .card, .news .article {
		 position: relative;
	}
	 .fix {
		 position: fixed;
	}
	 .dfix {
		 display: inline;
	}
	 .dib {
		 display: inline-block;
	}
	 .db {
		 display: block;
	}
	 .dn {
		 display: none;
	}
	 .df, .cards, .news {
		 display: flex;
	}
	 .dif {
		 display: inline-flex;
	}
	 .dg {
		 display: grid;
	}
	 .dig {
		 display: inline-grid;
	}
	 .vm, h2, h2 strong, h2 span {
		 vertical-align: middle;
	}
	 body {
		 background: #24282f;
		 font-family: 'Alegreya Sans';
	}
	 .wrapper {
		 padding: 15px;
	}
	 h2 {
		 padding: 10px;
		 padding-left: 25px;
		 color: #ccc;
		 margin: 0;
	}
	 h2 strong {
		 z-index: 2;
		 background: #24282f;
		 padding: 4px 8px;
	}
	 h2 span {
		 font-size: 0.7em;
		 color: #aaa;
		 margin-left: 10px;
	}
	 h2:after {
		 content: '';
		 z-index: 1;
		 bottom: 50%;
		 margin-bottom: -2px;
		 height: 2px;
		 left: 0;
		 right: 0;
		 background: #373d47;
	}
	 .cards, .news {
		 flex-flow: row wrap;
	}
	 .cards .card, .news .card {
		 margin: 20px;
		 width: 180px;
		 height: 270px;
		 overflow: hidden;
		 box-shadow: 0 5px 10px rgba(0,0,0,0.8);
		 transform-origin: center top;
		 transform-style: preserve-3d;
		 transform: translateZ(0);
		 transition: 0.3s;
	}
	 .cards .card img, .news .card img {
		 width: 100%;
		 min-height: 100%;
	}
	 .cards .card figcaption, .news .card figcaption {
		 bottom: 0;
		 left: 0;
		 right: 0;
		 padding: 20px;
		 padding-bottom: 10px;
		 font-size: 20px;
		 background: none;
		 color: #fff;
		 transform: translateY(100%);
		 transition: 0.3s;
	}
	 .cards .card:after, .news .card:after {
		 content: '';
		 z-index: 10;
		 width: 200%;
		 height: 100%;
		 top: -90%;
		 left: -20px;
		 opacity: 0.1;
		 transform: rotate(45deg);
		 background: linear-gradient(to top, transparent, #fff 15%, rgba(255,255,255,0.5));
		 transition: 0.3s;
	}
	 .cards .card:hover, .news .card:hover, .cards .card:focus, .news .card:focus, .cards .card:active, .news .card:active {
		 box-shadow: 0 8px 16px 3px rgba(0,0,0,0.6);
		 transform: translateY(-3px) scale(1.05) rotateX(15deg);
	}
	 .cards .card:hover figcaption, .news .card:hover figcaption, .cards .card:focus figcaption, .news .card:focus figcaption, .cards .card:active figcaption, .news .card:active figcaption {
		 transform: none;
	}
	 .cards .card:hover:after, .news .card:hover:after, .cards .card:focus:after, .news .card:focus:after, .cards .card:active:after, .news .card:active:after {
		 transform: rotate(25deg);
		 top: -40%;
		 opacity: 0.15;
	}
	 .news .article {
		 overflow: hidden;
		 width: 350px;
		 height: 235px;
		 margin: 20px;
	}
	 .news .article img {
		 width: 100%;
		 min-height: 100%;
		 transition: 0.2s;
	}
	 .news .article figcaption {
		 font-size: 14px;
		 text-shadow: 0 1px 0 rgba(51,51,51,0.3);
		 color: #fff;
		 left: 0;
		 right: 0;
		 top: 0;
		 bottom: 0;
		 padding: 40px;
		 box-shadow: 0 0 2px rgba(0,0,0,0.2);
		 background: rgba(6,18,53,0.6);
		 opacity: 0;
		 transform: scale(1.15);
		 transition: 0.2s;
	}
	 .news .article figcaption h3 {
		 color: #3792e3;
		 font-size: 16px;
		 margin-bottom: 0;
		 font-weight: bold;
	}
	 .news .article:hover img, .news .article:focus img, .news .article:active img {
		 filter: blur(3px);
		 transform: scale(0.97);
	}
	 .news .article:hover figcaption, .news .article:focus figcaption, .news .article:active figcaption {
		 opacity: 1;
		 transform: none;
	}
	</style>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="wrapper">

	<h2 style="color: white;"><strong>All Games<span style="color: white;">( 3 )</span></strong></h2>
 
	<div class="cards">

		<figure class="card">

			<a href='snake_game.php'><img src="https://i.dailymail.co.uk/i/pix/2017/03/01/13/3DD64B2D00000578-4270932-Nokia_has_announced_a_new_version_of_the_cult_game_Snake_for_Fac-a-22_1488374824594.jpg" /></a>

			<figcaption>Snake Game</figcaption>

		</figure>

		<figure class="card">

			<a href='hangman.php'><img src="https://images-na.ssl-images-amazon.com/images/I/514G6r1X9DL.png"/></a>

			<figcaption>Hangman</figcaption>

		</figure>

		<figure class="card">

			<a href='quiz_game.php'><img src="https://img.freepik.com/free-vector/orange-question-mark-background-with-text-space_1017-27394.jpg?size=338&ext=jpg&ga=GA1.2.1449299337.1618531200"/></a>

			<figcaption style="color: black;">Quiz</figcaption>

		</figure>

	</div>

</div>
</body>
</html>