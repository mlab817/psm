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
            background-color: #B9D9CE;
            font-family: nunito, sans-serif;
        }
        
        .cart-container{
            background-color: #B9D9CE;
            width: 1000px;
            height: 550px;
            margin: 0 auto;
            margin-top: 100px;
            
            
        }
        .cart-banner{
            text-align: center;
            margin-top: 50px;
            width: 100%;
            border-bottom: solid black;
        }
        .cart-banner h1{
            margin-bottom: 20px;
        }
        .grooming-tab{
            text-align: left;
            padding-left: 500px;
            margin-top: 100px;
            width: 100%;
            list-style: none;
            text-decoration: none;
        }
        .grooming-tab .dog-tab{
            border-bottom: solid black;
            display: inline-block;
            margin-left: 10px;
            
        }
        .grooming-tab a{
            list-style: none;
            text-decoration: none;
            color: black;
        }
        .grooming-tab a:hover{
            color:#000080;
        }
        .grooming-tab .cat-tab{
            border-bottom: solid black;
            display: inline-block;
            margin-left: 420px;
        }
        .dog1{
            float:left;
            width: 35%;
            padding: 10;
            margin-left: 10px;
            margin-top: 10px;
            height: 150px;
        }
        .dog1 img{
            width: 350px;
            height: 160px;
            border: solid black;
            border-radius: 20px;
        }
        .dog2{
            float:right;
            width: 35%;
            padding: 10;
            margin-top: 10px;
            margin-right: 10px;
            margin-bottom: 10px;
            height: 150px;
        }
        .dog2 img{
            width: 350px;
            height: 160px;
            border: solid black;
            border-radius: 20px;
        }
        .dog3{
            float:left;
            width: 35%;
            padding: 10;
            margin-top: 40px;
            margin-left: 10px;
            margin-bottom: 10px;
            height: 150px;
        }
        .dog3 img{
            width: 350px;
            height: 160px;
            border: solid black;
            border-radius: 20px;
        }
        .dog4{
            float:left;
            width: 35%;
            padding: 10;
            margin-top: 30px;
            margin-left: 270px;
            margin-bottom: 10px;
            height: 150px;
        }
        .dog4 img{
            width: 350px;
            height: 160px;
            border: solid black;
            border-radius: 20px;
            margin-left: 10px;
        }
        .dog5{
            float:left;
            width: 35%;
            padding: 10;
            margin-top: 30px;
            margin-left: 10px;
            margin-bottom: 10px;
            height: 150px;
        }
        .dog5 img{
            width: 350px;
            height: 160px;
            border: solid black;
            border-radius: 20px;
        }
        .dog6{
            float:right;
            width: 35%;
            padding: 10;
            margin-top: 30px;
            margin-right: 20px;
            margin-bottom: 10px;
            height: 150px;
        }
        .dog6 img{
            width: 350px;
            height: 160px;
            border: solid black;
            border-radius: 20px;
            margin-left: 10px;
        }
        .back-button button{
            border-radius: 5px;
            border: solid 1px black;
            background-color: #F5F5DC;
            color: black;
            padding: 10px 50px;
            text-align: center;
        }
        .back-button button:hover{
            color: #000080;
        }
        .button-container{
            height: 11px;
            width: 1000px;
            margin: 0 auto;
            margin-top: 20px;
        }
        .button-container .order-button{
            margin-left: 640px;
        }
    </style>
</body>

<body>
    <div class="cart-banner">
        <h1>Pet Grooming Services</h1>
        </div>
        <div class="grooming-tab">
            <div class="dog-tab"><a href="grooming.php"><h3>Pet Grooming for Dogs</h3></a></div>
            <div class="cat-tab"><a href="catsgrooming.php"><h3>Pet Grooming for Cats</h3></a></div>
        </div>
        <div class="cart-container">
            <div class="top">
                <div class="dog1"><a href="smalldogsdetails.php"><img src="images/dogs1.png"></a></div>
                <div class="dog2"><a href="#"><img src="images/dogs2.png"></a></div>
            </div>

        <div class="total">
            <div class="dog3"><a href="mediumdogsdetails.php"><img src="images/dogs3.png"></a></div>
        </div>

        <div class="total">
            <div class="dog4"><a href="#"><img src="images/dogs4.png"></a></div>
        </div>

        <div class="total">
            <div class="dog5"><a href="largedogsdetails.php"><img src="images/dogs5.png"></a></div>
        </div>
        
        <div class="total">
            <div class="dog6"><a href="#"><img src="images/dogs6.png"></a></div>
        </div>

    </div>


</body>
</html>