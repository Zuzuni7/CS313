<?php
    require 'dbConnect.php';
    session.start();
    
    try {
        $username = $_GET["username"];
        $password = password_hash($_GET["password"], PASSWORD_DEFAULT);

        $sql = "INSERT INTO Account (username, hashed_password) VALUES ('$username', $password);";

        if ($db->query($sql) == TRUE) {
            // User Created
            $_SESSION["logged_in"] = 1;
            $_SESSION["username"] = $username;
            
            header("Location: welcome.php"); 
        } else {
            // User Not Created
            header("Location: signup.php"); 
        }
    }
    catch (Exception $e) {
        // Error
        header("Location: signup.php"); 
    }

    exit();
?>