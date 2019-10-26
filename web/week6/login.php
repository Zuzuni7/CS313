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
        <title>Document</title>
    </head>
    <body>
    <h1>Welcome<h1>
    <?php
    

    if(!empty($_POST)) {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $stmt = $db->prepare("SELECT * FROM user_ WHERE username = :username");
            $stmt->bindValue(':username', $username);
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
     		{
                $user_id = $row['user_id'];
                $username = $row['username'];
                $password = $row['password'];
                echo "<p>$user_id "." $username "." $password</p>";

                if($_POST['password'] = $password)
                {
                    $_SESSION['user_id'] = $user_id;
                    echo "<h1>$username and $user->password</h1>";
                }
                else
                {
                    echo "<p>Incorrect Password</p>";
                }
            }
        }
        else 
        {
            echo "<p>You must fill out the entire form!</p>";
        }
    }
    else
    {
        echo "<p>You must fill out the username!</p>";
    }
?>   
    </body>
    </html>
