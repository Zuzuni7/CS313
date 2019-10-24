<?php
require 'dbConnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.css">
	<title>Reminisce</title>
</head>
<body>
    <h1>Reminisce: Homepage</h1>
    <form action="userNotes.php" method="post">
    Input your username: <input type="text" name="username" id="username" placeholder="Username">
    <br />
    <input type="submit" value="Search">
    </form>

    <?php

    foreach ($db->query('SELECT u.username, de.user_id, de.entry_type, de.title, de.entry_text FROM daily_entry de JOIN user_ u ON u.user_id = de.user_id;') as $row){
        $user = $row['username'];
        $userId = $row['user_id'];
        $entryType = $row['entry_type'];
        $title = $row['title'];
        $text = $row['entry_text'];

        echo "<p>$User Entries </p>";
        echo "<a href='userNotes.php'>User Entries</a>";

        echo "<p>Username: $user</p>";
        echo "<p>Account Number: $userId </p>";
        echo "<p>Entry Title: $title</p>";
        echo "<p>How was your day? $entryType</p>";
        echo "<p>What happened? $text </p>";
        echo "<br/><br/>";
    }

    ?>

</body>
</html>

<!--
\i ../db/create.sql

-->