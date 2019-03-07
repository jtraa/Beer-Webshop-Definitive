

<?php
session_start();


    include "db_connect.php";

    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $result = "SELECT UserEmail
               FROM beerform 
               WHERE UserEmail = '$user_email' 
               AND UserPassword = '$user_password'";

    $db_result = $conn->query($result);

    if ($db_result->rowCount()==1){
        foreach($db_result as $row){
            $firstname = $row['UserEmail'];
        }
               
        header("Location: homepage.php");
        
    } else{
        echo "Failed, username or password wrong"; 
    }

?>