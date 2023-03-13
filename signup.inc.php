<?php
    include_once 'db.php';

    if (isset($_POST["submit"])){
    $email = $_POST['email'];
    $first = $_POST['first'];
    $last = $_POST['last'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $pwd = $_POST['pwd'];


    require_once 'db.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($email, $first, $last, $phone, $address, $password)!== false) {
        header("location:signup.php?error=emptyinput");
        exit();
    }
    if (invalidEmail($email)!== false) {
        header("location:signup.php?error=invalidemail");
        exit();
    }
    if (invalidFirstname($first)!== false) {
        header("location:signup.php?error=invalidfirstname");
        exit();
    }
    if (invalidLastname($last)!== false) {
        header("location:signup.php?error=invalidlastname");
        exit();
    }
    if (invalidPhonenumber($phone)!== false) {
        header("location:signup.php?error=invalidphonenumber");
        exit();
    }
    if (invalidAddress($address)!== false) {
        header("location:signup.php?error=invalidaddress");
        exit();
    }
    if (invalidPassword($password)!== false) {
        header("location:signup.php?error=invalidpassword");
        exit();
    }

    if (emailExists($con, $email)!== false) {
        header("location:signup.php?error=emailtaken");
        exit();
    }
    createUser($con, $email, $first, $last, $phone, $address, $password);

    }
    else {
        header("location:index.php");
        exit();
    }
    
   

 

    
