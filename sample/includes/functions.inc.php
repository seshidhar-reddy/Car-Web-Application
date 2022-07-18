<?php
function invalidEmail($email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }
    else{
        return false;
    }
}
function invalidusername($conn,$username,$mail){
    $sql = "SELECT * FROM USER_INMT WHERE USERNAME=? OR EMAIL=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ss",$username,$mail);
    mysqli_stmt_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($result)){
        return $row;
    }
    else{
        return false;
    }
}
function createuser($conn,$firstname,$lastname,$mail,$username,$password){
    $sql="INSERT INTO USER_INMT(FIRSTNAME,LASTNAME,EMAIL,USERNAME,PWD) VALUES(?,?,?,?,?);";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }
    $hashedpwd=password_hash($password,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"sssss",$firstname,$lastname,$mail,$username,$hashedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../signup.php?error=none");
    exit();
}