<?php
require 'dbConnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOMEPAGE</title>
</head>
<body>
    <h1>Homepage</h1>
    <?php

    foreach ($db->query('SELECT u.username, de.user_id, de.entry_type, de.title, de.entry_text FROM daily_entry de JOIN user_ u ON u.user_id = de.user_id;') as $row){
        $user = $row['username'];
        $userId = $row['user_id'];
        $entryType = $row['entry_type'];
        $title = $row['title'];
        $text = $row['entry_text'];

        echo "<p>Username: $user</p>";
        echo "<p>Account Number: $userId </p>";
        echo "<p>Entry Title: $title</p>";
        echo "<p>How was your day? $entryType</p>";
        echo "<p>What happened? $text </p>";
    }

    ?>

</body>
</html>

<!--
\i ../db/create.sql

-->