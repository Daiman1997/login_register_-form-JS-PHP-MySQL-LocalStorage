<?php

$mysql = new mysqli('localhost', 'root', 'root', 'new-work');

$userName = filter_var(trim($_POST['userName']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$result = $mysql->query("SELECT * FROM `users` WHERE `userName` = '$userName' AND `password` = '$password'");

$user = $result->fetch_assoc();

if (count($user) == 0) {
	echo "<div><h1>User is not found!</h1></div>";
	exit();
}
setcookie('user', $user['userName'], time() + 3600, "/");

header('Location: /');