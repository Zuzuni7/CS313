<?php
include 'dbConnect.php';
$db = get_db();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.css">
    <link href="../css/fancy.css" rel="stylesheet" type="text/css" >
    <title>Add Note</title>
</head>
<body>
<?php
session_start();
$user_id = $_SESSION['user_id'];

try {
    $entry = $_POST["entry"];
    $title = $_POST["title"];
    $status = $_POST["status"];

    //echo $_POST['status']; //debugging
   
    $date = getTimeStamp();
    //echo "<p>about to make the insert query.</p>"; // debugging
    $query = 'INSERT INTO daily_entry(user_id, entry_type, entry_text, title, created_date)VALUES(:_user_id, :_status, :_entry, :_title,:_date)';
    $stmt = $db->prepare($query);
    echo "post insert query";
    $stmt->bindValue(':_user_id',$user_id);
    $stmt->bindValue(':_entry',$entry);
    $stmt->bindValue(':_title',$title);
    $stmt->bindValue(':_status',$status);
    $stmt->bindValue(':_date', $date);
    echo "dd it execute yet? nah fam.";
    $stmt->execute();
    echo "Executed the query";
    if ($db->query($sql) == TRUE) {
        echo "New entry created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
        header("location: profile.php");
    }
    $user_id = $db->lastInsertId();
    //echo "ID: " . $user_id . "Title: " . $title . "Entry: " . $entry . "Status: " . $status;
    
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
