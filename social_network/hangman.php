<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");

if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap 4 CDN -->
  <link rel="stylesheet" type="text/css" href="style/home_style2.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Hangman</title>
</head>
<body>
<div class="row">
<div class="container">
  <h1 class="text-center">Hangman</h1>
  <div class="float-right">Wrong Guesses: <span id='mistakes'>0</span> of <span id='maxWrong'></span></div>
  <div class="text-center">
    <img id='hangmanPic' src="Vanilla-Javascript-Hangman-Game-master/images/0.jpg" alt="">
    <p>Guess the Programming Language:</p>
    <p id="wordSpotlight">The word to be guessed goes here</p>
    <div id="keyboard"></div>
    <button class="btn btn-info" onClick="reset()">Reset</button>
  </div> 
</div>
</div>

<script src='hangman.js'></script>
</body>
</html>