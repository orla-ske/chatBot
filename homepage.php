<?php
date_default_timezone_get('Europe/London'); 
require_once 'dbconfig/config.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <br> 
    <br>
    <br>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>OChatbot</title>
    

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="style.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>

<style>
    body{
        background-image: url('https://png.pngtree.com/thumb_back/fw800/background/20190223/ourmid/pngtree-smart-robot-arm-advertising-background-backgroundrobotblue-backgrounddark-backgroundlightlight-image_68405.jpg');
        background-repeat: no-repeat; 
        background-attachment: fixed; 
        background-size: 100% 100%; 
    }
</style>
<body>
    <div class="contianer">
        <div class="row justify-content-md-center mb-8">
            <div class="col-md-8">
                <form class="myform" action="homepage.php" method="post">
                    <input name="logout" type="submit" id="logout_btn" value="Log Out"/><br>
                </form> 

                <?php 
                    if(isset($_POST['logout'])){
                        session_destroy(); 
                        header('location:index.php'); 
                    }
                ?>
                <div class="card">
                    <div class="card-body messages-box">
                        <ul class="list-unstyled messages-list">
    
</body>
</html>