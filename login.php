
<!DOCTYPE html>
<html>
    <head>
            <title>Log In</title>
<style>
    body{
            background-color: #B9D9CE;
            font-family: nunito, sans-serif;
            
        }

        .container{
            background-color: #B9D9CE;
            width: 1000px;
            height: 500px;
            margin: 0 auto;
            margin-top: 100px;
            border: solid black;
            padding-right: 10px;
            border-radius: 10px;
        }
        .right-container{
            float: right;
            width: 600px;
            height: 480px;
            margin-top: 10px;
            background-color: #F5F5DC;
            border-radius: 15px;
            border: solid 2px #BE95C4;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
            
        }
        .left-container img {
            width: 200px; 
            height: auto; 
            margin-left: 100px;
            margin-top: 40px;
        }
        .logo1 {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .logo1 img {
            max-width: 100%;
            height: auto;
            margin-top: 10px;
            margin-bottom: 40px;
        }
        form {
            width: 400px;
            margin: 0 auto;
            font-family: nunito, sans-serif;
            text-align: center;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type=submit]:hover {
            background-color: #45a049;
        }

        input[type=text]:focus, input[type=password]:focus {
            outline: none;
            border-color: #4CAF50;
            box-shadow: 0 0 5px rgba(81, 203, 238, 1);
        }

        .message {
            text-align: center;
            color: red;
        }

        

</style>
</head>

<body>
<?php include 'navbar.php';?>


<div class="container">
    <div class="right-container">
    <div class="logo1">
    <img src="images/logo.png">
    </div>
<div class="form">
<form action="login.inc.php" method= "POST">
    <input type="text" name="email" placeholder="E-mail">
    <br>
    <input type="password" name="pwd" placeholder="Password">
    <br>
    <button type="submit" name="submit">Log In</button>
</form>
        <div class="message">
        <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p> Fill in all fields</p>";
        } else if ($_GET["error"] == "wronglogin") {
            echo "<p>Incorrect Login!</p>";
        }
    }
    ?>
        </div>
    </div>
    </div>
    <div class="left-container">
        <img src="images/sign1.png">

    </div>
</div>
</body>
</html>