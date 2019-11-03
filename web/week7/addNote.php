<?php
include 'dbConnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.css">
    <link href="../css/fancy.css" rel="stylesheet" type="text/css" >
    <title>Notes</title>
</head>
<body>
<?php
session_start();
$user_id = $_SESSION['user_id'];

try {
    $entry = $_POST["entry"];
    $title = $_POST["title"];
    $status = 'TEST';
    // if ($status != null)
    // {
    //     $status = ($_POST["status"]);
    // }
    // else
    // {
    //     //die();
    //     //header("location: profile.php");
    // }
    $date = getdate();
    echo "$date";
    $sql = "INSERT INTO daily_entry (user_id, entry_type, entry_text, title, created_date) VALUES ($user_id, '$status', '$entry', '$title');";
    if ($db->query($sql) == TRUE) {
        echo "New entry created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
    $user_id = $db->lastInsertId();
    echo "ID: " . $user_id . "Title: " . $title . "Entry: " . $entry . "Status: " . $status;
    // foreach ($db->query('SELECT topic_id, topic_name FROM topic;') as $row) {
    //     $topic_id = $row['topic_id'];
    //     $topic_name = $row['topic_name'];
    //     if ($_POST[$topic_name]) {
    //         $sql = "INSERT INTO link (topic_id, scripture_id) VALUES ($topic_id, $scriptureId);";
    //         $db->query($sql);
    //     }
    // }
    
   // header("Location: profile.php");
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}
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
</body>
</html>
