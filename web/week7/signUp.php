<?php
/**********************************************************
* File: singup.php
* Author: Br. Burton
* 
* Description: Allows a user to enter a new username
*   and password to add to the DB.
*
* It posts to a file called "createAccount.php"
*   which does the actual creation.
*
***********************************************************/
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link href="../css/fancy.css" rel="stylesheet" type="text/css" >
    
	<title>Sign Up</title>
</head>

<body>
<div>

<h1>Sign up for new account</h1>

<form id="login" action="createAccount.php" method="POST">

	<p><input type="text" id="username" name="txtUser" placeholder="Username"></p>
	<p><label for="txtUser">Username</label></p>
	<br /><br />

	<p><input type="password" id="password" name="password" placeholder="Password"></p>
	<p><label for="password">Password</label></p>
	<br /><br />

	<p><input type="submit" value="Create Account" /><p>

</form>


</div>

</body>
</html>