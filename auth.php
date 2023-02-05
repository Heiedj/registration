<?php
$login = filter_var(trim($_POST['login']));
$pass = filter_var(trim($_POST['pass']));

$pass = md5($pass."test");

include('db.php');

$result = $mysql->query("SELECT * FROM `user` WHERE `login` LIKE '$login' AND `password` LIKE '$pass'");

$users = $result->fetch_assoc();

setcookie('user_id', $users['id'], time() + 3600, '/');

setcookie('login', $users['login'], time() + 3600, '/');
setcookie('role', $users['role'], time() + 3600, '/');

$mysql->close();

header('Location: /reg_bootstrap/index.php');
?>