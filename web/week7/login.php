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
        <link rel="stylesheet" type="text/css" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
        <link href="../css/fancy.css" rel="stylesheet" type="text/css" >
    
        <title>Login Page</title>
    </head>
    <body>
    <h1 class="login">Reminisce: <em>"Remember Well"</em></h1>
    <div class="container">
        <div class="login">
            <form method="post" action="login.php">
                <p><input type="text" name="username" value="" placeholder="Username or Email" required></p>
                <p><input type="password" name="password" value="" placeholder="Password" required></p>
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
    //session_start();
    $e = '';

    if(!empty($_POST)) 
    {
        if (isset($_POST['username']) && isset($_POST['password'])) 
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $stmt = $db->prepare("SELECT * FROM user_ WHERE username = :username AND user_password = :passwrd");
            $stmt->bindValue(':username', $username);
            $stmt->bindValue(':passwrd', $password);
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
     		{
                $user_id = $row['user_id'];
                $username = $row['username'];
                $pswd = $row['user_password'];
                //echo "<p>$user_id "." $username "." $pswd</p>";

                if($password = $pswd)
                {
                    session_start();
                    $_SESSION['user_id'] = $user_id;
                    header("location: profile.php");
                    $db = get_db();
                }
                else
                {
                    $e = "Incorrect Password.";
                }
            }
        }
        else 
        {
            $e = "You must fill out the entire form.";
        }
    }
    else
    {
        $e = "You must fill out the entire form.";
    }
?>   
<br />
<div class="container">

<h1 class="login">Sign up for new account</h1>

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
<?php

        ?>
    </body>
    </html>
