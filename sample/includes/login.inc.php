<?php
    if(isset($_POST["submit"])){
        $username=$_POST["uid"];
        $password=$_POST["pwd"];
        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';
        if(!invalidusername($conn,$username,$username)){
            header("Location: ../index.php?error=invalid username");
            exit();
        }
        else{
            $row = invalidusername($conn,$username,$username);
            $pwdhashed = $row["PWD"];
            $checkpad = password_verify($password,$pwdhashed);
            if($checkpad === false){
                header("Location: ../index.php?error=invalid password");
                exit();
            }
            else if($checkpad === true){
                session_start();
                $_SESSION["username"] = $username;
                header("Location: ../home.php");
            }
        }
    }
    else{
        header("Location: ../index.php");
        exit();
    }
?>