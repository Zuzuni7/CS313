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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="fancy.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.3.1-dist/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="primary.css"> -->
	<title>Reminisce</title>
</head>
<body>
    <h1>Reminisce: <em>"Remember Well"</em></h1>
    <div class="container">
    <section id="content">
        <form action="login.php" method="post" role="form">
            <h1>Login Form</h1>
            <div>
                <input type="text" name="username" placeholder="Username" required="" id="username" />
            </div>
            <div>
                <input type="password" placeholder="Password" required="" id="password" name="password" />
            </div>
            <div>
                <input type="submit" value="Lemme In!" />
                <a href="#">Lost your password?</a>
                <a href="#">Register</a>
            </div>
        </form><!-- form -->
        
    </section><!-- content -->
</div>
        <!-- <div class="page-container">
        <form action="login.php" method="post" role="form">
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="text" name="username" placeholder="Enter your username" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="password" name="password" placeholder="Enter your password" required>
                </div>
            </div>
            <input type="submit" name="submit" value="Submit">
            <span><?php echo $e; ?></span>
        </form>
    </div> -->

</body>
</html>

<!--
\i ../db/create.sql
 echo htmlspecialchars($_SERVER['PHP_SELF']);
-->