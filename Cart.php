<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart</title>
    <style>
        body{
            background-color: #B9D9CE;
            font-family: nunito, sans-serif;
        }
        
        .cart-container{
            background-color: #D9D9D9;
            width: 1000px;
            height: 500px;
            margin: 0 auto;
            margin-top: 100px;
            border: solid black;
        }
        .cart-banner{
            text-align: center;
            margin-top: 20px;
            width: 100%;
            border-bottom: solid black;
        }
        .cart-banner h1{
            margin-bottom: 20px;
        }
        .product-card{
            background-color: #F5F5DC;
            width: 80%;
            height: 200px;
            margin: 50px auto;
            border: solid black;
            border-radius: 20px;
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
        .button-container .checkout-button{
            margin-left: 650px;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="cart-banner">
        <h1>Cart</h1>
    </div>
    <div class="cart-container">
        <div class="product-card">

        </div>

    </div>
    <div class="button-container">
        <div class="back-button">
            <a href="treats.php"><button type="button"><b>Back to Shop</b></button></a>
            <a href="checkout.php"><button class="checkout-button" type="button"><b>Checkout</b></button></a>
        </div>
    </div>
</body>
</html>