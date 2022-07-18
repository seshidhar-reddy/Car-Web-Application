<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style_index.css">
    <title>Document</title>
</head>
<body>
<form action="includes/signup.inc.php" method="post" >
    <div class="a0">
    <h1>SignUp</h1>
    <div class="a1">
        <input type="text" name="FirstName" placeholder="FirstName" required>
        <input type="text" name="LastName" placeholder="LastName" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="uid" placeholder="UserName" required>
        <input type="password" name="pwd" placeholder="Password" required>
        <input type="password" name="confirm_pwd" placeholder="Confirm Password" required>
    </div>
    <button type="submit" name="submit">SignUp</button>
    <?php
    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(strpos($fullUrl,"error=diff_passwords") == true){
        echo "<h2>Verify The Password Correctly</h2>";
        exit();
    }
    elseif(strpos($fullUrl,"error=invalidemail") == true){
        echo "<h2>Invalid Email</h2>";
        exit();
    }
    elseif(strpos($fullUrl,"error=usernameexists") == true){
        echo "<h2>Username/Email Already Exists</h2>";
        exit();
    }
    elseif(strpos($fullUrl,"error=stmtfailed") == true){
        echo "<h2>Unexpected Error. Try Again";
        exit();
    }
    elseif(strpos($fullUrl,"error=none") == true){
        echo "<h2Signed Up Successfully</h2>";
        exit();
    }
    ?>
    </div>
</form>
</body>
</html>