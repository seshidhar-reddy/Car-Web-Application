<?php
session_start();
if(isset($_POST['submit'])){
    $car = $_POST['select_car'];
    $n = 16;
    $files = array();
    foreach($_FILES as $file){
        array_push($files,$file);
    }
    $filesname = array();
    foreach($_FILES as $file){
        array_push($filesname,$file['name']);
    }
    $fileslocation = array();
    foreach($_FILES as $file){
        array_push($fileslocation,$file['tmp_name']);
    }
    $fileserror = array();
    foreach($_FILES as $file){
        array_push($fileserror,$file['error']);
    }
    $filesext = array();
    foreach($filesname as $file){
        array_push($filesext,explode('.',$file));
    }
    $actext = array();
    foreach($filesext as $file){
        array_push($actext,strtolower(end($file)));
    }
    $allowed = array("jpeg","png","jpg");
    foreach($actext as $key => $file){
        if(in_array($file,$allowed)){
            if($fileserror[$key] === 0){
                $id=$_SESSION["username"];
                $filenamenew = $id.",".$car.",".$key.".".$file;
                $filedest = $filenamenew;
                move_uploaded_file($fileslocation[$key],$filedest);
            }
            else{
                echo $fileserror[$key];
                header("Location: ../sell.php?error=qwer");
                exit();
            }
        }
        else{
            header("Location: ../sell.php?error=asdf");
            exit();
        }
    }
    header("Location: ../sell.php?error=none");
}
?>