<?php
require 'dbConnect.php';
//include('login.php');
$db = get_db();
if (isset($_SESSION['login_user'])){
    header("location: profile.php");
}
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="primary.css">
	<title>Reminisce</title>
</head>
<body>
    <h1>Reminisce: Homepage</h1>

    <div class="page-container">
        <?php
            if (isset($_POST['username']) && isset($_POST['password'])) 
            {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $stmt = $db->prepare("SELECT * FROM user_ WHERE username = :username AND user_password = :passwrd");
                $stmt->bindValue(':username', $username);
                $stmt->bindValue(':passwrd', $password);
                $stmt->execute();
                echo "<p>We just executed</p>";
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                 {
                    $user_id = $row['user_id'];
                    $username = $row['username'];
                    $pswd = $row['user_password'];
                    echo "<p>$user_id "." $username "." $pswd</p>";
    
                    if($pswd == $password)
                    {
                        $_SESSION['user_id'] = $username;
                        header("location: profile.php");
                        //$db = get_db();
                        //echo "<h1>$username and $password</h1>";
                        echo "Welcome $username! ";
                        echo "Password $password";

                        /*Load in user data*/
                        $query = 'SELECT title, entry_text, created_date FROM daily_entry WHERE user_id = (SELECT user_id FROM user_ WHERE username = $username';
                        foreach($db->query($query) as $row)
                        {
                            $title = $row["title"]; 
                            $entry = $row["entry_text"]; 
                            $date = $row["created_date"];
                            
                            echo "<p>$title $date <br/> $entry </p>";
                        }
                    }
                    else
                    {
                        $e = "Incorrect Password.";
                    }
                }
            }
            else 
            {
                $e = "Please fill out the entire form.";
            }
        ?>
        </div>
        <div class="page-container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" role="form">
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="text" name="username" placeholder="Enter your username" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="password" name="password" placeholder="Enter your password" required>
                </div>
            </div>
            <input type="submit" name="submit" value="Submit">
            <span><?php echo $e; ?></span>
        </form>
        <?php
            // echo "Welcome $username!";
            // echo "Password: $password $user_id";    
        ?>
    </div>

</body>
</html>

<!--
\i ../db/create.sql

-->