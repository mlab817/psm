<?php include 'navbar.php'; ?>

<?php

    if (isset($_POST["submit"])){

        $email = $_POST["email"];
        $password = $_POST["password"];

        require_once 'db.php';
        require_once 'functions.inc.php';

        if (emptyInputLogin($email, $password)!== false) {
            header("location:login.php?error=emptyinput");
            exit();
        }

        loginUser($con, $email, $password);
    }
    else {
        header("location:index.php");
        exit();
    }
    