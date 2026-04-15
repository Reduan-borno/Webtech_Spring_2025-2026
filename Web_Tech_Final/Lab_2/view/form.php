<?php
session_start();

$usernameerror = $_SESSION['usernameerror'] ?? "";
$emailerror = $_SESSION['emailerror'] ?? "";
$phoneerror = $_SESSION['phoneerror'] ?? "";

?>

<html>

<head>
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <form method="post" action="../controller/formvalidation.php">
        <table>
            <tr>
                <td>username : </td>
                <td><input type="text" name="username" placeholder="Enter your username"></td>
                <td>
                    <p style='color: red;'><?php echo "$usernameerror"; ?></p>
                </td>
            </tr>
            <tr>
                <td>email : </td>
                <td><input type="text" name="email" placeholder="Enter your email"></td>
                <td>
                    <p style='color: red;'><?php echo "$emailerror"; ?></p>
                </td>
            </tr>

            <tr>
                <td>phone : </td>
                <td><input type="text" name="phone" placeholder="Enter your phone number"></td>
                <td>
                    <p style='color: red;'><?php echo "$phoneerror"; ?></p>
                </td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="login"></td>
            </tr>

        </table>
    </form>
</body>

</html>