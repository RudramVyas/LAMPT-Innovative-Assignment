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
    <title>My Post</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<body>
<div class="row">
    <center> <h2> See your results here! </h2> </center>
    <?php results();?>
</div>
</body>
</html>

<!--function results(){
        global $con;

        if(isset($_GET['search'])){
            $search_query = htmlentities($_GET['user_query]);
        }

        $get_posts = "select * from posts where post_content like '%$search_query%' OR upload_image like '%$search_query%'";

        $run_posts = mysqli_query($con, &get_posts);

        while($row_posts = mysqli_fetch_array($run_posts)){
            $post_id = $row_posts['post_id'];
            $user_id = $row_posts['user_id'];
            $content = $row_posts['post_contet'];
            $upload_image = $row_posts['upload_image'];
            $post_date = $row_posts['post_date'];

            $user = "select * from users where user_id='$user_id' AND posts='yes";

            $run_user = mysqli_query($con, $user);
            $row_user + mysqli_fetch_array($run_user);

            $user_name = $row_user['user_name'];
            $first_name = $row_user['f_name'];
            $last_name = $row_user['l_name'];
            $user_image = $row_user['user_image'];

            //displaying posts

            if($content=="No" && strlen($upload_image) >= 1){
            echo"
            <div class='row'>
                <div class='col-sm-3'>
                </div>
                <div id='posts' class='co1-sm-6'>
                    <div class='row'>
                        <div class='col-sm-2'>
                        <p><img src='users/$user_image' class='img-circle' width='100px' height='100px'></p>
                        </div>
                        <div class='col-sm-6'>
                            <h3><a style='text-decoration: none; cursor:pointer;color #3897f0;' href='user_profile.php?u_id=$user_id'>$user_name</a></h3>
                            <h4><sma11 style=scolor:black;'>Updated a post on <strong>$post_date</strong></sma11></h4>
                        </div>
                        <div class='col-sm-4'>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-sm-12'>
                            <img id'posts-img' src='imagepost/$upload_image' style='height:350px;'> 
                        </div>
                    </div><br>
                </div>
                <div class='col-sm-3>
                </div>
            </div><br><br>";
        }

        else if(strlen($content) >= 1 && strien($upload_image) >= 1){ 
            echo" 
            <div class='row'> 
                <div class='col-sm-3'> 
                </div> 
                <div id='posts' class='col-sm-6'>
                    <div class='row'> 
                        <div class='cal-sm-2'> 
                        <p›<img src='users/$user_image' class='img-circle' width='100px' height='100px'></p> 
                        </div> 
                        <div class='col-sm-6'> 
                            <h3><a style='text-decoration:none; cursor:pointer;color #3897f0;' href='user_profile.php?u_id=$User_id'>$user_name</a></h3> 
                            <h4><small style='color:black;'>Updated a post on <strong>$post_date </strong></small></h4> 
                        </div> 
                        <div class='col-sm-4'> 
                        </div> 
                    </div> 
                    <div class='row'>
                        <div class='col-sm-12'>
                            <p> $content </p>
                            <img id='posts-img' src='imagepost/$upload_image' style='height:350px;'>
                        </div>
                    </div><br>
                </div>
                <div class='col-sm-3'>
                </div>
            </div><br><br>";
        }

        else{
            echo" 
            <div class='row'> 
            <div class='col-sm-3'> 
            </div> 
            <div id='posts' class='col-sm-6'>
                <div class-'row'> 
                    <div class='col-sm-2'> 
                    <p><img src='users/$user_image' class='img-circle' width='100px' height='100px'></p> 
                    </div> 
                    <div class="col-sm-6'> 
                        <h3><a style='text-decoration:none; cursor:pointer;color #3897f0;' href='user_profile.php?u_id=$user_id'>$user_name</a></h3> 
                        <h4><small style='color:black;'>Updated a post on <strong>$post_date </strong></small></h4> 
                    </div> 
                    <div class='col-sm-4'>
                    </div> 
                </div> 
                <div class='row'> 
                    <div class='col-sm-12'> 
                        <h3><p>$content</p></h3> 
                    </div> 
                </div><br> 
            </div> 
            <div class-'col-sm-3'> 
            </div> 
        <div><br><br>"; 
    } -->