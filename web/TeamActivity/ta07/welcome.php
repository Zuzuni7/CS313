<?php
    require 'dbConnect.php';
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 1) {
        $username = $_SESSION['username'];
} else if(!isset($_SESSION['logged_in']) || (isset($_SESION['logged_in']) && $_SESSION['logged_in'] == 0)){
    //session is not set
        header('Location: signup.php');
}?>

<html lang="en">
    <head>
        <title>Document</title>
    </head>
    <body>
        <h1>Welcome, <?php echo ($username); ?></h1>
    </body>
</html>