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
    <h1>Welcome<h1>
    <div class="container">
        <div class="login">
            <form method="post" action="login.php">
                <p><input type="text" name="username" value="" placeholder="Username or Email"></p>
                <p><input type="password" name="password" value="" placeholder="Password"></p>
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
                echo "<p>$user_id "." $username "." $pswd</p>";

                if($pswd == $password)
                {
                    session_start();
                    $_SESSION['user_id'] = $username;
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

<?php
        //echo "$_SESSION['user_id']";

        if (isset($_SESSION['user_id']))
        {
            $statement = $db->prepare('SELECT d.title, d.entry_text, d.created_date FROM daily_entry d WHERE d.user_id = (SELECT u.user_id FROM user_ u WHERE u.username = $username)');
            $statement->execute();
            //foreach($db->query('SELECT d.title, d.entry_text, d.created_date FROM daily_entry d WHERE d.user_id = (SELECT u.user_id FROM user_ u WHERE u.username = $username);') as $row)
            while($data = $statement->fetch(PDO::FETCH_ASSOC))
            {
                $title = $data["title"]; 
                $entry = $data["entry_text"]; 
                $date = $data["created_date"];
                
                //$_SESSION["name"] = $username;
                
                echo "<p>$title $date <br/> $entry </p>";
            }
        }
        ?>
    </body>
    </html>
