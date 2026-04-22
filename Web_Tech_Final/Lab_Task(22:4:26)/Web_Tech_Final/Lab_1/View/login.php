<?php
session_start();

$usernameerror = $_SESSION['usernameerror'] ?? "";
$passworderror = $_SESSION['passworderror'] ?? "";
?>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>login</h2>
    <form method="post" action="../Controller/Loginvalidation.php">
    <table>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username" placeholder="User name required"></td>
            <td><p style='color: red;'><?php echo "$usernameerror"; ?></p></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" placeholder="Password required"></td>
            <td><p style='color: red;'><?php echo "$passworderror"; ?></p></td>

        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Login"></td>
        </tr>
    </table>
    </form>
</body>
</html>
