<?php
require('dbConnect.php');
$db = get_db();
//$_SESSION["user_id"];
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
        //$current_user_id = $_SESSION['user_id'];
        $stmt = $db->prepare("SELECT username FROM user_ WHERE user_id = '{$_SESSION['user_id']}'");
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $username = $row["username"];
            echo "<h1>Welcome $username!</h1>";
        }
?>

<div>
    <?php
        echo "<a href='logout.php'>LOGOUT</a>";
    ?>
</div>
</body>
</html>