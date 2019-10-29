<?php
require 'dbConnect.php';
//include('login.php');
$db = get_db();
if (isset($_SESSION['user_id'])){
    //header("location: login.php");
    session_start();
}

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
    <h1>Reminisce: <em>Remember Well</em></h1>

        <div class="page-container">
        
        <form action="login.php" method="post" role="form">
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
        if (isset($_SESSION['username']))
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
    </div>

</body>
</html>

<!--
\i ../db/create.sql
 echo htmlspecialchars($_SERVER['PHP_SELF']);
-->