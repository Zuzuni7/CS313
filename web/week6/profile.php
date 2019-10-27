<?php
require('dbConnect.php');
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
<?php
        $stmt = $db->prepare("SELECT username FROM user_ WHERE username = 'shalomsims'");
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $username = $row["username"];
            echo "<p>$username</p>";
        }
?>
    <h1>Welcome <?php echo"<h1>Hello</h1>"; ?></h1>
</body>
</html>