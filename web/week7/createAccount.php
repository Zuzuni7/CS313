<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link href="../css/fancy.css" rel="stylesheet" type="text/css" >
    <title>Create Account</title>
</head>
<body>
<?php

$username = $_POST['username'];
$password = $_POST['password'];
if (!isset($username) || $username == ""
	|| !isset($password) || $password == "")
{
	header("Location: login.php");
	die(); 
}

$username = htmlspecialchars($username);

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

require("dbConnect.php");
$db = get_db();
$query = 'INSERT INTO user_(username, user_password) VALUES(:username, :password)';
$statement = $db->prepare($query);
$statement->bindValue(':username', $username);

$statement->bindValue(':password', $hashedPassword);
$statement->execute();

header("Location: login.php");
die(); 
?>
</body>
</html>

