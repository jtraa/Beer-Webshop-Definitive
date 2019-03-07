<!DOCTYPE html>
<html>
    <head>
        <title>MySQL PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">        
        <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Julius+Sans+One|Oswald" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    </head>

    <body><body>
    <div class="header">
        <a href="#default" class="logo">das bier</a>
        <div class="header-right">
          <a class="active" href="index.php">Home</a>
          <a href="#contact">Contact</a>
          <a href="#about">About</a>
          <a href="http://localhost/webshop/webshop-test/login-registreer/login.php">Login</a>
          <a href="#winkelwagen">Cart</a>
        </div>
      </div>

      <div class="header2">
        <a href="#default" class="logo"></a>
        <a class="logo"></a>
        <div class="header2-right">
          <a class= borderheader2 href="#beer"><I>Our Beer</I></a>
          <a class= borderheader2 href="#beerboxes"><I>Beer Boxes</I></a>
          <!-- <a class= borderheader2 href="http://localhost/webshop/webshop-test/login-registreer/login.php"><I>Login</I></a> -->
          <a class= borderheader2 href="#winkelwagen"><I>Top 10 Best Sold</I></a>
        </div>
      </div>

          
        <!-- <div class="whitespace"></div> -->
        <!-- <div id="grid"> -->
            <!-- <div class="topimage"></div> -->
            <!-- <div class="bottom"></div> -->
        </div>
    </div>
    <ul>




    </ul>
        <div class="allescontainer debug">
            <div class="headers debug"></div>
                <div class="card debug">
                    <?php include "productquery.php"; ?>       
                </div>
                <!--
                <div class="debug footer"></div>
                


            </div>        
         
    </body>
</html>
