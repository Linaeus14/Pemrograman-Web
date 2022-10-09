<?php
    $id = $_POST["id"];
    $pass = $_POST["pass"];
    $tipe = $_POST["tipe"];
    
    if($id == "admin" and $pass == "1234" and $tipe == "admin") {    
        session_start();
        if(isset($_SESSION["sida"])) {
            header("Location: ../dashboard/admin.php", TRUE, 301);
            die();
        }
        else {
            $_SESSION["start"] = time(); 
            $_SESSION["expire"] = $_SESSION['start'] + (15 * 60) ;
            $_SESSION["sida"] = session_id();
            header("Location: ../dashboard/admin.php", TRUE, 301);
            die();
        }
    }
    elseif ($id == "user" and $pass == "1234" and $tipe == "user") {
        session_start();
        if(isset($_SESSION["sidu"])) {
            header("Location: ../dashboard/user.php", TRUE, 301);
            die();
        }
        else {
            $_SESSION["start"] = time(); 
            $_SESSION["expire"] = $_SESSION['start'] + (15 * 60) ;
            $_SESSION["sidu"] = session_id();
            header("Location: ../dashboard/user.php", TRUE, 301);
            die();
        }
    }
    else {
        header("Location: ../index.php", TRUE, 301);
    }
?>