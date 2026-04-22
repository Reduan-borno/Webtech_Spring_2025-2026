<?php
session_start();

$username = $_POST['username'] ?? "";
$email = $_POST['email'] ?? "";
$phone = $_POST['phone'] ?? "";

$hasusernameerror = false;
$hasemailerror = false;
$hasphoneerror = false;

// validation
if (empty($username)) {
    $_SESSION['usernameerror'] = "Username is required";
    $hasusernameerror = true;
}

if (empty($email)) {
    $_SESSION['emailerror'] = "Email is required";
    $hasemailerror = true;
}

if (empty($phone)) {
    $_SESSION['phoneerror'] = "Phone number is required";
    $hasphoneerror = true;
}

// error check
if ($hasusernameerror || $hasemailerror || $hasphoneerror) {
    header("Location: ../view/form.php");
    exit();
}

// fake user check
$users = [
    "reduan" => ["email" => "arnobreduan679@gmail.com", "phone" => "01777777777"]
];

$found = false;

foreach ($users as $user => $data) {
    if ($username == $user && $email == $data['email'] && $phone == $data['phone']) {
        $found = true;
        break;
    }
}

if ($found) {
    $_SESSION["username"] = $username;
    $_SESSION['isloggedin'] = true;
    header("Location: ../view/success.php");
    exit();
} else {
    header("Location: ../view/form.php");
    exit();
}
?>