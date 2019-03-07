
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRODUCTS</title>
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
  <div class="tablinks" onclick="openCity(event, 'All')" id="defaultOpen"><p>All</p></div>
  <div class="tablinks" onclick="openCity(event, 'London')"><p>Filter on price, High to Low</p></div>
  <div class="tablinks" onclick="openCity(event, 'Paris')"><p>Filter on price, Low to High</p></div>
  <div class="tablinks" onclick="openCity(event, 'Country')"><p>Filter on country</p></div>
  <div class="tablinks" onclick="openCity(event, 'Type')"><p>Filter on type</p></div>
  <div class="tablinks" onclick="openCity(event, 'Procent')"><p>Filter on %</p></div>
</div>
</div>
       


<div id="blackbox">
        <div id="All" class="tabcontent" id="defaultOpen">
            <div class="card debug"> <?php include "productquery.php"; ?>  </div>
        </div>

        <div id="London" class="tabcontent">
            <div class="card debug"> <?php include "filter-1.php";?> </div>
        </div>

        <div id="Paris" class="tabcontent">
            <div class="card debug"> <?php include "filter-2.php";?>  </div>
        </div>  

        <div id="Country" class="tabcontent">
            <div class="card debug"> <?php include "filter-3.php";?>  </div>
        </div>  

        <div id="Type" class="tabcontent">
            <div class="card debug"> <?php include "filter-4.php";?>  </div>
        </div>  

        <div id="Procent" class="tabcontent">
            <div class="card debug"> <?php include "filter-5.php";?>  </div>
        </div>  

</div>
<script src='nav.js'> </script>
</body>
</html>