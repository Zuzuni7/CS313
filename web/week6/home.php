<?php
require 'dbConnect.php';
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
        <form action="" method="post">
            <input type="text" name="username" placeholder="Enter your username" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <input type="submit" value="Submit">
        </form>
    </div>
    <?php
        session_start();
        
        if(!empty($_POST)) {
            if (isset($_POST['username']) && isset($_POST['password'])) {
                $username = $_POST['username'];
                $stmt = $db->prepare("SELECT * FROM user_ WHERE username = :username");
                $stmt->bindValue(':username', $username);
                $stmt->execute();
                $result = $stmt->get_result();
                $user = $result->fetch_object();
                
                while ($row = $statement->fetch(PDO::FETCH_ASSOC))
				{
                    $user_id = $row['user_id'];
                    $username = $row['username'];
                    $password = $row['password'];

                    echo "<p>$user_id "." $username "." $password</p>";
				}

                echo "<h1>$username and $user->password</h1>";

                if($_POST['password'] = user.password){
                    $_SESSION['user_id'] = $user->ID;

                    echo "<h1>$username and $user->password</h1>";
                }
            }
            else {
                echo "<p>You must fill out the entire form!</p>";
            }
        }else{
            echo "<p>You must fill out the username!</p>";
        }
    ?>

</body>
</html>

<!--
\i ../db/create.sql

-->