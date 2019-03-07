<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BEERBOX</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://use.typekit.net/xio8wiu.css">
</head>

<body>

<div id="header">
<h1> DASBIER </h1>
<a href="loginregister.php"><h2> LOGIN </h2></a>
<a href="bphome.php"><h2> BEER BOXES </h2></a>
<a href="home.php"><h2> OUR BEER </h2></a>
<a href="homepage.php"><h2> HOME </h2></a>
</div>

    
<!-- <div class="sidebar"> -->
<div id="filterbox">
    <h1> FILTERS </h1>
    <br>
<div class="tab">
  <div class="tablinks" onclick="openCity(event, 'All')"><p>All</p></div>
  <div class="tablinks" onclick="openCity(event, 'London')"><p>Filter on price, High to Low</p></div>
  <div class="tablinks" onclick="openCity(event, 'Paris')"><p>Filter on price, Low to High</p></div>
</div>
</div>
       


<div id="blackbox">
        <div id="All" class="tabcontent">
            <div class="card debug"> <?php include "bpproductquery.php"; ?>  </div>
        </div>

        <div id="London" class="tabcontent">
            <div class="card debug"> <?php include "bpfilter-1.php";?> </div>
        </div>

        <div id="Paris" class="tabcontent">
            <div class="card debug"> <?php include "bpfilter-2.php";?>  </div>
        </div>  
</div>
<script src='nav.js'> </script>
</body>
</html>