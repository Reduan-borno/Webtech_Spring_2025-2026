<?php
session_start();

if(!isset($_SESSION['isLoggedIn'])){
    header("Location: login.php");
    exit();
}

$theme = $_COOKIE['theme'] ?? 'light';
?>

<html>
<head>
    <title>Dashboard</title>
</head>

<body style="background-color: <?php echo ($theme == 'dark') ? 'black' : 'white'; ?>; color: <?php echo ($theme == 'dark') ? 'white' : 'black'; ?>;">

<h1>Dashboard</h1>

<p>Welcome: <?php echo $_SESSION['registeredUser']; ?></p>
<p>Login Time: <?php echo $_SESSION['loginTime']; ?></p>

<a href="settings.php">Settings</a><br>
<a href="../controllers/AuthController.php?action=logout">Logout</a>

</body>
</html>