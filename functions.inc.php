<?php

function emptyInputSignup($email, $first, $last, $phone, $address, $password) {
    $result;
    if (empty($email) || empty($first) || empty($last)|| empty($phone)|| empty($address)|| empty($password)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidFirstname($first){
    $result;
    if (!preg_match("/^[a-zA-Z]*$/", $first)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidLastname($last){
    $result;
    if (!preg_match("/^[a-zA-Z]*$/", $last) ){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidPhonenumber($phone){
    $result;
    if (!preg_match("/^[0-9]*$/", $phone)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidAddress($address){
    $result;
    if (!preg_match("/^[a-zA-Z0-9,. ]*$/", $address)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidPassword($password){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $password)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function emailExists($con, $email){
    $sql = "SELECT * FROM users WHERE email = ?;";

    $stmt = mysqli_stmt_init($con);

    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location:signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($con, $email, $first, $last, $phone, $address, $password){
    $sql = "INSERT INTO users (email, first_name, last_name, phone_number, address, password) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt ,$sql)){
        header("location:signup.php?error=stmtfailed");
    exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssss", $email, $first, $last, $phone, $address, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:index.php?signup=success");

}

function emptyInputLogin($email, $password) {
    $result;
    if (empty($email) || empty($password)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($con,$email,$password){
    $emailExists = emailExists($con, $email);

    if ($emailExists === false){
        header("location:login.php?error=wronglogin");
        exit();
    }
    $hashedPwd = $emailExists["password"];
    $checkPassword = password_verify($password, $hashedPwd);

    if($checkPassword === false){
        header("location:login.php?error=wronglogin");
        exit();
    }
    else if ($checkPassword === true){
        session_start();
        $_SESSION["email"] = $emailExists["email"];
        header("location:index.php");
        exit();
    }
}