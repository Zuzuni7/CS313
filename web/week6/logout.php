<?php
require 'dbConnect.php';
$db = get_db();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/fancy.css" rel="stylesheet" type="text/css" >
    <title>Logout</title>
</head>
<body>
    <p>Are you sure you want to log out?</p>
    <form method="POST" action=""> 
        <input type="submit" name="yes" value="Yes, I'm sure.">
        <input type="submit" name="no" value="No, I changed my mind.">
    </form>
<?php 
    if(isset($_POST["yes"]))
    {
        echo $_SESSION["user_id"];
        die();
        header("location: home.php");
    }
    echo $_SESSION["user_id"];
?>
</body>
</html>