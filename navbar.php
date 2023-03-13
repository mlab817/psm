<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Navbar</title>

    <style>

        *{
            padding: 0;
            margin: 0;
        }

        #navbar{
            width: 100%;
            background: #F5F5DC;
           
              
        }

        #navbar ul{
            list-style-type: none;
            text-align: center;
            font-family: nunito, sans-serif;

        }
        #navbar a{
            text-decoration: none;
            color: black;
        }

        #navbar a:hover{
            color: #000080;
        }

        #navbar li{
            display: inline-block;
            padding: 30px;
            color: #000;
        }
        .logo img {
            position:absolute;
            padding-top: 10px;
            padding-left: 150px;
            padding-bottom: 20px;
        }

    </style>

</head>
<body>
   
    <div id="navbar">
        <div id="logo">
            <div class ="logo">
                <a href = "index.php"><img src="images/logo.png"></a>
            </div>
        </div>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="treats.php">Treats</a></li>
            <li><a href="accessories.php">Accessories</a></li>
            <li><a href="grooming.php">Grooming</a></li>
            <?php
            if (isset($_SESSION["email"])) {
                echo '<li><a href="profile.php">Profile page</a></li>';
                echo '<li><a href="logout.php">Logout</a></li>';
            } 
            else {
                echo '<li><a href="login.php">Login</a></li>';
                echo '<li><a href="signup.php">Signup</a></li>';
            }
            ?>
        </ul>
    </div>
    
</body>
</html>
