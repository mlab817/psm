<!DOCTYPE html>
<html lang="en">
<head>
    <title>Large Dog Details</title>
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

            width: 85%;
            height: 430px;
            margin: 30px auto;


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
            margin-left: 620px;
        }
        .groom-details{
            padding: 30px 50px;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="cart-banner">
        <h1>Grooming Details</h1>
    </div>
    <div class="cart-container">
        <div class="product-card">
            <div class="groom-details"><p><b>Full Groom (Large dogs  ₱800)</b></p>
            <br>
            <p>Service Description:</p>
            <br>
            <p>Full grooming refers to a comprehensive pet grooming service that covers all aspects of pet <br>hygiene and appearance.A full grooming session typically includes:</p>
            <br>
            <ul>
                <li>Bathing</li>
                <li>Brushing</li>
                <li>Trimming</li>
                <li>Nail Trimming</1i>
                <li>Ear Cleaning</li>
                <li>Teeth Brushing</li>
                <li>Blow Drying</li>
            </ul>
            <br>
            <br>
            <br>
            <p><b>Contact Details</b></p>
            <br>
            <p>CYA Building Magsaysay Avenue, Barangay. Taculing, Bacolod City.</p>
            <p>0905 335 8627</p>
            </div>
        </div>
    </div>

    <div class="button-container">
        <div class="back-button"><a href="grooming.php"><button type="button"><b>Back to Services</b></button></a><a href="calendar.php"><button class="checkout-button" type="button"><b>Book Now</b></button></a></div>
    </div>
</body>
</html>