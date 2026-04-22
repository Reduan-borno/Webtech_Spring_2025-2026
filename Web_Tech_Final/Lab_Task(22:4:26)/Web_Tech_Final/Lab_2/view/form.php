<?php
session_start();

$usernameerror = $_SESSION['usernameerror'] ?? "";
$emailerror = $_SESSION['emailerror'] ?? "";
$phoneerror = $_SESSION['phoneerror'] ?? "";
?>

<html>
<head>
    <title>Form</title>
</head>

<body>

<h2>Login Form</h2>

<form method="post" action="../controller/formvalidation.php">

<table>

<tr>
<td>Username:</td>
<td><input type="text" name="username"></td>
<td><p style="color:red;"><?php echo $usernameerror; ?></p></td>
</tr>

<tr>
<td>Email:</td>
<td><input type="text" name="email"></td>
<td><p style="color:red;"><?php echo $emailerror; ?></p></td>
</tr>

<tr>
<td>Phone:</td>
<td><input type="text" name="phone"></td>
<td><p style="color:red;"><?php echo $phoneerror; ?></p></td>
</tr>

<tr>
<td></td>
<td><input type="submit" value="Login"></td>
</tr>

</table>

</form>

</body>
</html>

<?php
unset($_SESSION['usernameerror']);
unset($_SESSION['emailerror']);
unset($_SESSION['phoneerror']);
?>