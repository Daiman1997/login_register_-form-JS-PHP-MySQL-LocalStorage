<?php

$connection = new PDO('mysql:host=localhost;dbname=new-work', 'root', 'root');

$data = [
	"email" => $_POST['email'],
	"userName" => $_POST['userName'],
	"password" => $_POST['password']
];

$sql = 'INSERT INTO users (email,
							userName,
							password)
					VALUES(:email,
							:userName,
							:password)';
$statement = $connection->prepare($sql);
$result = $statement->execute($data);
header('Location: /');