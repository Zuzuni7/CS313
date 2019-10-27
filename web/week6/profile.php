<?php
require_once('dbConnect.php');
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
        //$query = 'SELECT user'
        echo "<p>$_SESSION["user_id"]</p>";
?>
    <h1>Welcome <?php echo"<h1></h1>"; ?></h1>
</body>
</html>