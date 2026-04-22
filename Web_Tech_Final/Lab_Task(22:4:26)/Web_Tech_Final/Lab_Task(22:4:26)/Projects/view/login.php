<?php
session_start();

$loginError = $_SESSION['loginError'] ?? '';
unset($_SESSION['loginError']);
?>

<html>
<head>
    <title>Login</title>
</head>
<body>

<h1>Login</h1>

<form method="POST" action="../controllers/AuthController.php?action=login">

<table>

<tr>
<td>Username:</td>
<td><input type="text" name="username"></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="password" name="password"></td>
</tr>

<tr>
<td></td>
<td><?php echo $loginError; ?></td>
</tr>

<tr>
<td></td>
<td><input type="submit" value="Login"></td>
</tr>

</table>
</form>

<a href="register.php">Go to Register</a>

</body>
</html>