<?php
session_start();

$usernameError = $_SESSION['usernameError'] ?? '';
$emailError = $_SESSION['emailError'] ?? '';
$passwordError = $_SESSION['passwordError'] ?? '';
$confirmPasswordError = $_SESSION['confirmPasswordError'] ?? '';

$username = $_SESSION['username'] ?? '';
$email = $_SESSION['email'] ?? '';

unset($_SESSION['usernameError']);
unset($_SESSION['emailError']);
unset($_SESSION['passwordError']);
unset($_SESSION['confirmPasswordError']);
?>

<html>
<head>
    <title>Register</title>
</head>
<body>

<h1>Register</h1>

<form method="POST" action="../controllers/AuthController.php?action=register">

<table>

<tr>
<td>Username:</td>
<td><input type="text" name="username" value="<?php echo $username; ?>"></td>
<td><?php echo $usernameError; ?></td>
</tr>

<tr>
<td>Email:</td>
<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
<td><?php echo $emailError; ?></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="password" name="password"></td>
<td><?php echo $passwordError; ?></td>
</tr>

<tr>
<td>Confirm Password:</td>
<td><input type="password" name="confirmPassword"></td>
<td><?php echo $confirmPasswordError; ?></td>
</tr>

<tr>
<td></td>
<td><input type="submit" value="Register"></td>
</tr>

</table>
</form>

<a href="login.php">Go to Login</a>

</body>
</html>