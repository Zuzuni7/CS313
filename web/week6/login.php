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
                echo "<p>$user_id "." $username "." $pswd</p>";

                if($pswd == $password)
                {
                    $_SESSION['user_id'] = $user_id;
                    echo "<h1>$username and $password</h1>";
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
