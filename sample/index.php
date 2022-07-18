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
<form action="includes/login.inc.php" method="post" >
    <div class="a0">
    <h1>Login</h1>
    <div class="a1">
        <input type="text" name="uid" placeholder="UserName/Email" required>
        <input type="password" name="pwd" placeholder="Password" required>
    </div>
    <button type="submit" name="submit">Login</button>
    <div class="a2">
        <h3>Don't Have an Account <a href="signup.php">SignUp</a></h3>
    </div>
    </div>
    <?php
    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(strpos($fullUrl,"error=invalid username") == true){
        echo "<h2>Invalid UserName</h2>";
        exit();
    }
    elseif(strpos($fullUrl,"error=stmtfailed") == true){
        echo "<h2>Unexpected Error. Try Again";
        exit();
    }
    elseif(strpos($fullUrl,"error= invalid password") == true){
        echo "<h2>Invalid Password</h2>";
        exit();
    }
    ?>
</form>
</body>
</html>