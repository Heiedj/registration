<?php
$name = filter_var(trim($_POST['name']));
$surname = filter_var(trim($_POST['surname']));
$login = filter_var(trim($_POST['login']));
$email = filter_var(trim($_POST['email']));
$phone = filter_var(trim($_POST['phone']));
$pass = filter_var(trim($_POST['pass']));
$passrep = filter_var(trim($_POST['repeat_pass']));
$pass = md5($pass.'test');
$passrep = md5($passrep.'test');
include('db.php');
if($pass !== $passrep){
    exit();
    
}else{
    $mysql->query("INSERT INTO `user` (`name`, `surname`, `login`, `email`, `phone`, `password`, `role`) VALUES ('$name', '$surname', '$login', '$email', '$phone', '$pass', 1)");
}
$mysql->close();
    header('Location: /');
    ?>