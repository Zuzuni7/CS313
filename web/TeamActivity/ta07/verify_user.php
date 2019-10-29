<?php 
    require 'dbConnect.php';
    session.start();
    
    try {
        $username = $_GET["username"];
        $password = password_hash($_GET["password"], PASSWORD_DEFAULT);

        $db->query("SELECT comment FROM Comment c WHERE c.story_id = '$id';") as $row;

        if ($db->query($sql) == TRUE) {
            // User Created
            header("Location: welcome.php"); 
            exit();
        } else {
            // User Not Created
            header("Location: signup.php"); 
            exit();
        }
    }
    catch (Exception $e) {
        // Error
        header("Location: signup.php"); 
        exit();
    }
?>