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
  <link rel="stylesheet" type="text/css" href="style/home_style2.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link href="style/quiz_game.css" rel="stylesheet">
  <script defer src="quiz_game.js"></script>

  <title>Quiz App</title>

</head>

<body>

  <div class="container">

    <div id="question-container" class="hide">

      <div id="question">Question</div>

      <div id="answer-buttons" class="btn-grid">

        <button class="btn">Answer 1</button>

        <button class="btn">Answer 2</button>

        <button class="btn">Answer 3</button>

        <button class="btn">Answer 4</button>

      </div>

    </div>

    <div class="controls">

      <button id="start-btn" class="start-btn btn">Start</button>

      <button id="next-btn" class="next-btn btn hide">Next</button>

    </div>

  </div>

</body>

</html>