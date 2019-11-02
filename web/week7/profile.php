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
            echo "<h1>Welcome $username!</h1>";
        }
?>
    <div class="login">
        <?php
            $statement = $db->prepare("SELECT created_date, title, entry_text");
        ?>
    </div>
<div>
    <?php
        footer("location: logout.php");
    ?>
</div>
</body>
</html>