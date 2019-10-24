<?php
include 'dbConnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
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

    ?>
    <div class="card">
        <div class="card-header">
            Quote
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
        </div>
    </div>
    <?php

    echo "<p>Username: $username</p>";
    echo "<p>What happened? $text </p>";
    echo "<br/><br/>";
}

?>
</body>
</html>
