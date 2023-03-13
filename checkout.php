<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout</title>
    <style>
        body{
            background-color: #B9D9CE;
            font-family: nunito, sans-serif;
        }
        
        .cart-container{
            background-color: #D9D9D9;
            width: 1000px;
            height: 550px;
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
            float:left;
            width: 55%;
            padding: 10;
            margin-left: 10px;
            margin-top: 10px;
            height: 200px;
            border: solid black;
            border-radius: 20px;
        }
        .payment-info{
            background-color: #F5F5DC;
            float:right;
            width: 40%;
            padding: 10;
            margin-left: 10px;
            margin-top: 10px;
            margin-right: 10px;
            margin-bottom: 10px;
            height: 400px;
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
        .button-container .order-button{
            margin-left: 640px;
        }
        .raw1{
            background-color: #F5F5DC;
            float:right;
            width: 55%;
            padding: 10;
            
            margin-top: 10px;
            margin-right: 10px;
            margin-bottom: 10px;
            height: 200px;
            border: solid black;
            border-radius: 20px;
        }
        .raw{
            background-color: #F5F5DC;
            float:left;
            margin:0 auto;
            width: 80%;
            padding-top: 10px;
            padding-left: 10px;
            margin-left: 100px;
            height: 50px;
            border: solid black;
            border-radius: 20px;
        }
        
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="cart-banner">
        <h1>Checkout</h1>
    </div>
    <div class="cart-container">
        <div class="top">
            <div class="product-card"></div>
            <div class="payment-info"></div>
        </div>

    <div class="total">
        <div class="raw1"></div>
    </div>

    <div class="total">
        <div class="raw"></div>
    </div>
    </div>
    <div class="button-container">
        <div class="back-button"><a href="treats.php"><button type="button"><b>Back to Shop</b></button></a><a href="checkout.php"><button class="order-button" type="button"><b>Order Now</b></button></a></div>
    </div>
</body>
</html>