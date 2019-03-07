<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" href="firstpage.css">
    <link rel="stylesheet" href="https://use.typekit.net/xio8wiu.css">
</head>
<body>
<?php

    // //if(){}
    // //isset()
    // //$_GET['et']
    //     if(isset($_GET['et'])){
    //         echo '<h1> EMAIL/WW IS ONJUIST </h1>';
    //     }else{
    //         //niks
    //     }
    ?>
<div id="blackbox">
<form class="loginForm" action="loginFormHandler.php" method="POST">   
        <div id="titel">
            LOGIN
        </div>
        <div id="line">
        </div>
        <form><br>
            E-mail: <br>
            <input type="email" id="username" name="user_email" autofocus required/><br><br>
            Password: <br>
            <input type="password" id="password" name="user_password" required/><br><br>
            <center>
                <input type="submit" value="LOGIN" id="loginknop">
            </center>
        </form>
    </div>
</body>
</html>