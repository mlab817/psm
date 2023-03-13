<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
</head>
<body>

<?php include 'navbar.php'; ?>

<style>
    body{
        background-color: #b9d9ce;
        background-attachment: fixed;
        background-position: bottom;
        background-image: url("images/pet1.png");
        background-repeat:repeat-x; 
       
        
        }

        .column {
        float: left;
        width: 20%;
        margin: 1rem 80px;
    }
    .card li{
            list-style: none;
        }

    .card img {
        width: 300px;
       
    }

    .about {
        margin: 50px auto;
        padding-bottom: 25px;
        border-bottom: 2px solid #E0B1CB;
    }

    .offer {
        margin-top: 50px;
        padding-bottom: 25px;
        border-bottom: 2px solid #E0B1CB;
    }

    .clients {
        margin-top: 50px;
        padding-bottom: 25px;
        border-bottom: 2px solid #E0B1CB;
    }

    .row {
        margin: 0 auto;
        padding-left: 230px;
        padding-top: 100px;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }
    .page li{
        list-style: none;
    }

    .page li img {
        width: 500px ;
        height: 200px;
        border: 3px solid #000080;

        
    }
    .page{
        margin: 0 auto;
        padding-left: 700px;
        padding-top: 80px;
    }

</style>

<div class="page">
<li><a href = "#"><img src="images/page.png"></a></li>
</div>

<div id="treats">

<div class="row">
  <div class="column">
    <div class="card">
    <li><a href = "grooming.php"><img src="images/boxx.png"></a></li>
      
    </div>
  </div>

  <div class="column">
    <div class="card">
    <li><a href = "treats.php"><img src="images/box2.png"></a></li>
      
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <li><a href = "accessories.php"><img src="images/box11.png"></a></li>
      
    </div>
  </div>

</body>
</html>
    
