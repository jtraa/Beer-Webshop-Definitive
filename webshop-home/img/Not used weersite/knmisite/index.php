<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css"/>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <title>Weather</title>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="float:right";>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <form action="" class="search-form">
                <div class="form-group has-feedback">
            		<label for="search" class="sr-only">Search</label>
            		<input type="text" class="form-control" name="" id="search" placeholder="location">
              		<span class="glyphicon glyphicon-search form-control-feedback"></span>
            	</div>
            </form>
        </div>
    </div>
</div>

<!-- <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="float:right";>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <form action="" class="search-form">
                <div class="form-group has-feedback">
            		<label for="search" class="sr-only">Search</label>
            		<input type="text" class="form-control" name="search" id="search" placeholder="search">
              		<span class="glyphicon glyphicon-search form-control-feedback"></span>
            	</div>
            </form>
        </div>
    </div>
</div>
     -->

<div class="location">

    <h1 class="location-timezone">Timezone</h1>
    <canvas class="icon" width="128" height="128"></canvas>
    
</div>

    
   <div class="temperature">
            <div class="degree-section">
        <h2 class="temperature-degree">34</h2>
        <span>°F</span>
        </div>
        <div class="temperature-description">It's freaking Cold
        </div>
   </div> 

   <script src="https://rawgithub.com/darkskyapp/skycons/master/skycons.js">></script>
    <script src="script.js"></script>
   
</body>
</html>