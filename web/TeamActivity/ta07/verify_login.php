<?php 
    require "dbConnect.php";
    session.start();
    
    try {
        $username = $_GET["username"];
        $password = password_hash($_GET["password"], PASSWORD_DEFAULT);

        foreach ($db->query("SELECT comment FROM Comment c WHERE c.story_id = '$id';") as $row) {
            
        }
    }
    catch (Exception $e) {
        // Error
        header("Location: signup.php"); 
    }

    exit();
?>