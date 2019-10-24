<?php
include 'dbConnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notes</title>
</head>
<body>
<?php
echo "<h1>User Notes!</h1>";
//how would I pass the user name to this file?? $username with a php form?
$username = $_POST["username"];

$query = "SELECT de.entry_text, u.username FROM daily_entry de JOIN user_ u ON u.user_id = $username";

foreach ($db->query($query) as $row){
    $text = $row['entry_text'];
    $username = $row['username'];
    echo "<p>Username: $username</p>";
    echo "<p>What happened? $text </p>";
    echo "<br/><br/>";
}

?>
</body>
</html>
