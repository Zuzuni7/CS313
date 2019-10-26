<?php
require 'dbConnect.php';
//include('login.php');
if (isset($_SESSION['login_user'])){
    header("location: profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.css">
	<title>Reminisce</title>
</head>
<body>
    <h1>Reminisce: Homepage</h1>
    <div>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Enter your username" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <input type="submit" name="submit" value="Submit">
            <span><?php echo $e; ?></span>
        </form>
    </div>

</body>
</html>

<!--
\i ../db/create.sql

-->