<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Treats</title>

    <style>
        body{
            background-color: #B9D9CE;
            font-family: nunito, sans-serif;
            
        }
        #dog{
            width: 100%;
            background: #B9D9CE;  
            border-bottom: 2px solid black;
            margin: 0 auto;
        }

        *{
            padding: 0;
            margin: 0;
        }
        #dog li{
            display: inline-block;
            padding: 40px;
            color: #000;
        }
        #dog img{
            height: 150px;
            width: 250px;
        }

        #dog ul{
            list-style-type: none;
            text-align: center;
            font-family: nunito, sans-serif;
            font-size: 30px;
        
        }

        .column {
        float: left;
        width: 20%;
        margin: 1rem 40px;
        padding: 5px;
        }

        .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 25px;
        text-align: center;
        background-color: #F3D691;
        }

        .card img {
        width: 150px;
        
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
        margin: 0 -5px;
        }

        .row:after {
        content: "";
        display: table;
        clear: both;
    }
        .card li{
            list-style: none;
        }

        .card li img{{
            width: 80px;
            height: 80px;
        }}

        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10%;
  
        }

       
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div id="dog">
        <ul>
            <li><a href = "#"><img src="images/Dog1.png"></a></li>
            <li>Pet Treats</li>
            <li><a href = "#"><img src="images/Cat1.png"></a></li>
        </ul>
    </div>

<div id="treats">

<div class="row">
  <div class="column">
    <div class="card">
    <li><a href = "#"><img src="images/dogtreats.png"></a></li>
      <p>Meat Jerky Grilled Liver Flavor</p>
      <p>₱150</p>
      <a href="Cart.php" class="button">Add To Cart</a>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <li><a href = "#"><img src="images/dogtreats1.png"></a></li>
      <p>Tasty Bites Crunchy Chicken Flavor</p>
      <p>₱120</p>
      <a href="Cart.php" class="button">Add To Cart</a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <li><a href = "#"><img src="images/dogtreats1.png"></a></li>
      <p>Tasty Bites Crunchy Chicken Flavor</p>
      <p>₱120</p>
      <a href="Cart.php" class="button">Add To Cart</a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <li><a href = "#"><img src="images/dogtreats.png"></a></li>
      <p>Meat Jerky Grilled Flavor</p>
      <p>₱150</p>
      <a href="Cart.php" class="button">Add To Cart</a>
    </div>
  </div>
</div>

<div class="row">
  <div class="column">
    <div class="card">
    <li><a href = "#"><img src="images/dogtreats.png"></a></li>
      <p>Meat Jerky Grilled Liver Flavor</p>
      <p>₱150</p>
      <a href="Cart.php" class="button">Add To Cart</a>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <li><a href = "#"><img src="images/dogtreats1.png"></a></li>
      <p>Tasty Bites Crunchy Chicken Flavor</p>
      <p>₱120</p>
      <a href="Cart.php" class="button">Add To Cart</a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <li><a href = "#"><img src="images/dogtreats1.png"></a></li>
      <p>Tasty Bites Crunchy Chicken Flavor</p>
      <p>₱120</p>
      <a href="Cart.php" class="button">Add To Cart</a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <li><a href = "#"><img src="images/dogtreats.png"></a></li>
      <p>Meat Jerky Grilled Flavor</p>
      <p>₱150</p>
      <a href="Cart.php" class="button">Add To Cart</a>
    </div>
  </div>
</div>


</body>
</html>