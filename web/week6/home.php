<?php
require 'dbConnect.php';
//include('login.php');
$db = get_db();
if (isset($_SESSION['user_id'])){
    //header("location: login.php");
    session_start();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <link href="../css/fancy.css" rel="stylesheet" type="text/css" >
    <!-- <link rel="stylesheet" type="text/css" href="../bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="primary.css"> -->
    <title>Reminisce</title>
    <style>

    </style>
</head>
<body>
    <h1 class="login">Reminisce: <em style="font:10px">"Remember Well"</em></h1>
    <div class="container">
        <div class="login">
            <form method="post" action="login.php">
                <p><input type="text" name="username" value="" placeholder="Username or Email"></p>
                <p><input type="password" name="password" value="" placeholder="Password"></p>
                <p class="remember_me">
                    <label>
                        <input type="checkbox" name="remember_me" id="remember_me">
                        Remember me on this computer
                    </label>
                </p>
                <p class="submit"><input type="submit" name="commit" value="Login"></p>
            </form>
        </div>
        <div class="login-help">
            <p>Forgot your password? <a href="#">Click here to reset it</a>.</p>
        </div>
    
    </div>
<?php
    footer("location: logout.php");
?>
</body>
</html>

<!--
\i ../db/create.sql
 echo htmlspecialchars($_SERVER['PHP_SELF']);
-->