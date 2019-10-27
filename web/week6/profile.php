<?php
require('dbConnect.php');
$db = get_db();
$_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Page</title>
</head>
<body>
<?php
        $stmt = $db->prepare("SELECT username FROM user_ WHERE username = 'shalomsims'");
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $username = $row["username"];
            echo "<h1>Welcome $username!</h1>";
        }
?>
</body>
</html>