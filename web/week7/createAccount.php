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
include 'dbConnect.php';
$db = get_db();

$username = $_POST['username'];
$password = $_POST['password'];
if (!isset($username) || $username == "" 
|| !isset($password) || $password == "")
{
    //echo "<p>ITS NOT SET</p>";
    $query = 'SELECT username FROM user_';
    $stmt = $db->prepare($query);
    $stmt->execute();
    $names = $stmt->fetchall(PDO::FETCH_ASSOC);
    
    foreach ($names as $name) {
        $checkname = $name['username'];
        if ($username === $checkname) {
            echo "<p>Failed to create account.</p>";
            header("location: login.php");
            die();
        }
    }
}
else 
{
    //echo "<p>IT IS SET</p>";
    
$username = htmlspecialchars($username);

//$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

require("dbConnect.php");

$query = 'INSERT INTO user_(username, user_password) VALUES(:username, :password)';
echo "<p>query created</p>";
$statement = $db->prepare($query);
echo "<p>Prepped query is ready</p>";
$statement->bindValue(':username', $username, PDO::PARAM_STR);
$statement->bindValue(':password', $password, PDO::PARAM_STR);
$statement->execute();
echo "<p>Account successfully created.</p>";

header("Location: login.php?success=True");
die(); 
}
?>
</body>
</html>

