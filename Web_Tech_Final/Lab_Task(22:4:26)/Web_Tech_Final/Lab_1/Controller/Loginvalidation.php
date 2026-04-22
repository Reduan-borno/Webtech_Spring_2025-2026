<?php
session_start();//must dite hobe jdi session use korte chai

$username = $_POST['username'] ?? "";
$password = $_POST['password'] ?? "";

//$username = $_REQUEST['username'];
//$password = $_REQUEST['password'];

$hasusernameerror = true;
$haspassworderror = true;

echo "<h1>Hello Mr, $username</h1>";
echo "<h3>we know password...$password, right?</h3>";

if(!$username){
    $_SESSION['usernameerror'] = "Username is required";
    $hasusernameerror = true;
}
else{
    unset($_SESSION['usernameerror']);
    $hasusernameerror= false;
}
if(!$password){
    $_SESSION['passworderror'] = "Password is required";
    $haspassworderror = true;
}
else{
    unset($_SESSION['passworderror']);
    $haspassworderror = false;
}

if ($hasusernameerror || $haspassworderror){
    header("Location: ../View/login.php");
}
else{
    echo "<h2>congerculation, found not valiidation, you are move to next step for credential check </h2>";
}
?>