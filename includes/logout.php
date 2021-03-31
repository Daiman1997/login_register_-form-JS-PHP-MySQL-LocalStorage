<?php 
setcookie('user', $user['userName'], time() - 3600, "/");
header('Location: /');