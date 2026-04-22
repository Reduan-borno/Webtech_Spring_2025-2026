<?php
$theme = $_POST['theme'] ?? 'light';

setcookie("theme", $theme, time() + (30*24*60*60), "/");

header("Location: ../views/settings.php");
exit();
?>