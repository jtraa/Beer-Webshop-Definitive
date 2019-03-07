<?php
    // echo "<br>";
    // echo $_GET["user_firstname"]; 
    // echo "<br>";
    // echo $_GET["user_lastname"]; 
    // echo "<br>";
    // echo $_GET["user_email"]; 
    // echo "<br>";
    // echo $_GET["user_job"]; 
    // echo "<br>";
    // echo $_GET["user_password"]; 
    // echo "GorillaPower";
    // echo "<br>";
    // echo $_POST["banaantje123123"]; 
    // echo "<br>";
    // echo $_POST["user_email"]; 
    // echo "<br>";
    // echo $_POST["user_password"]; 
    // echo "<br>";
    // echo $_POST["user_job"]; 
    // echo "<br>";
    // echo $_POST["user_email"]; 
    
        
        $email = $_POST["email"];
        $user_password = $_POST["password"];
        $user_password_repeat = $_POST["passwordrep"];       
 
        //SELECT * FROM users WHERE user_email = '$user_email', user_pwe = '$userpw'
    
        include "db-connection.php";
        try {
                $sql = "INSERT INTO beerform (UserEmail, UserPassword, UserPasswordRep)
                VALUES ('$email', '$user_password', '$user_password_repeat')";
                
                // use exec() because no results are returned
                $conn->exec($sql);
                echo "New record created successfully";
            }
        catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }
        
        $conn = null;
    
          header("Location: loginregister.php");  
        // $folderString = "../img/";
        // $folderString .= $_GET["user_firstname"];
        // echo $folderString;
    
        // $DBIMG = "banaantje.jpg";
    
        // $DMIMG = $folderString . $DBIMG;    
?>