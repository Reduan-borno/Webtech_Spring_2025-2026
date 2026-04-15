<?php
session_start();

$username = $_POST['username'] ?? "";
$email = $_POST['email'] ?? "";
$phone = $_POST['phone'] ?? "";

$hasusernameerror = true;
$hasemailerror = true;
$hasphoneerror = true;

echo "<h1>Hello Mr, $username</h1>";
echo "<h2> we know ,email is : $email</h2>";
echo "<h2> and your phone number is : $phone</h2>";

if (!$username) {
    $_SESSION['usernameerror'] = "Username is required";
    $hasusernameerror = true;
} else {
    $hasusernameerror = false;
}

if (!$email) {
    $_SESSION['emailerror'] = "Email is required";
    $hasemailerror = true;
} else {
    $hasemailerror = false;
}

if (!$phone) {
    $_SESSION['phoneerror'] = "Phone number is required";
    $hasphoneerror = true;
} else {
    $hasphoneerror = false;
}

if ($hasusernameerror || $hasemailerror || $hasphoneerror) {
    $_SESSION["username"] = $username;
    $_SESSION["email"] = $email;
    $_SESSION["phone"] = $phone;
    header("Location: ../view/form.php");
} else {
    $users = [
        "reduan" => ["email" => "arnobreduan679@gmail.com", "phone" => "00"]
    ];
   foreach($users as $user => $data){
    if($username == $user && $email == $data['email'] && $phone == $data['phone']) {
            $_SESSION["username"] = $username;
            $_SESSION['isloggedin'] = true;
            header("Location: ../view/formvalidation.php");
        } else {
            header("Location: ../view/form.php");
        }
    }
}
