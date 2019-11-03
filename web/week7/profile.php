<?php
require('dbConnect.php');
$db = get_db();
//$_SESSION["user_id"];
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link href="../css/fancy.css" rel="stylesheet" type="text/css" >
    <title>Profile Page</title>
</head>
<body>
<?php
        //echo "<p>Getting ready to query.</p>"; //debugging
        //$current_user_id = $_SESSION['user_id'];
        $user_id = $_SESSION['user_id'];
        $stmt = $db->prepare("SELECT username FROM user_ WHERE user_id = :userid");
        $stmt->bindValue(':userid', $user_id);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $username = $row["username"];
            echo "<h1 class='login'>Welcome $username!</h1>";
        }
?>
    <div class="login">
        <form method="post" action="addNote.php">
            <p><input type="text" name="title" placeholder="" required></p>
            <p><textarea rows="10" cols="40" name="entry" value="" placeholder="What happened today <?php echo"$username";?>?" required></textarea></p>
            <p>How was your day?</p>
            <p><input type="radio" value="Great!"    name="status">Great!</p>
            <p><input type="radio" value="Okay..."   name="status">Average.</p>
            <p><input type="radio" value="Terrible." name="status">Terrible...</p>
            <p class="submit"><input type="submit" name="commit" value="Submit"></p>
        </form>    
    </div>
<?php
    $statement = $db->prepare("SELECT de.created_date, de.title, de.entry_text, de.entry_type FROM daily_entry de WHERE de.user_id = :userid");
    $statement->bindValue(':userid', $user_id);
    $statement->execute();
    
    while($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
        $date = $row['created_date'];
        $title = $row['title'];
        $entry = $row['entry_text'];
        $type = $row['entry_type'];
        echo "<div class='login'><p>$date</p><br/><p>$title</p><br/><p>$entry</p><br/><p>$type</p></div>";
    }
    
?>
    <!-- <div class="login">
    </div> -->

<div class="login">
    <p>Are you sure you want to log out?</p>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
            <input type="submit" name="yes" value="Yes, I'm sure.">
            <input type="submit" name="no" value="No, I changed my mind.">
        </form>
    </div>
<?php 
    if(isset($_POST['yes']))
    {
        unset($_SESSION["user_id"]);
        header("location: home.php");
        die();
    }
?>

</body>
</html>