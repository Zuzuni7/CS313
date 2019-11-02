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
    <div class="login">
    <p>Are you sure you want to log out?</p>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
            <input type="submit" name="yes" value="Yes, I'm sure.">
            <input type="submit" name="no" value="No, I changed my mind.">
        </form>
    </div>
<?php 
    if(isset($_POST['yes']))
    {
        unset($_SESSION["user_id"]);
        header("location: home.php");
        die();
    }
?>
</body>
</html>