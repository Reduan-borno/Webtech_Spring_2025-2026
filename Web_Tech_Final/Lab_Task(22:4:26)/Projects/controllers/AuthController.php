<?php
session_start();

$action = $_GET['action'] ?? '';

if($action == "register"){

    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirmPassword'] ?? '';

    $hasError = false;

    // Username
    if(!$username || strlen($username) < 3){
        $_SESSION['usernameError'] = "Username must be at least 3 characters";
        $hasError = true;
    } else {
        $_SESSION['username'] = $username;
    }

    // Email
    if(!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['emailError'] = "Invalid email";
        $hasError = true;
    } else {
        $_SESSION['email'] = $email;
    }

    // Password
    if(!$password || strlen($password) < 6){
        $_SESSION['passwordError'] = "Password must be at least 6 characters";
        $hasError = true;
    }

    // Confirm Password
    if($password !== $confirmPassword){
        $_SESSION['confirmPasswordError'] = "Passwords do not match";
        $hasError = true;
    }

    if($hasError){
        header("Location: ../views/register.php");
        exit();
    }

    // Store registered user (simple)
    $_SESSION['registeredUser'] = $username;
    $_SESSION['registeredPass'] = $password;

    header("Location: ../views/login.php");
    exit();
}


if($action == "login"){

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if($username == ($_SESSION['registeredUser'] ?? '') && $password == ($_SESSION['registeredPass'] ?? '')){
        $_SESSION['isLoggedIn'] = true;
        $_SESSION['loginTime'] = date("Y-m-d H:i:s");

        header("Location: ../views/dashboard.php");
        exit();
    } else {
        $_SESSION['loginError'] = "Username or Password doesn't match";
        header("Location: ../views/login.php");
        exit();
    }
}


if($action == "logout"){
    session_destroy();
    header("Location: ../views/login.php");
    exit();
}
?>