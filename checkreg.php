<?php
  $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
  if(mb_strlen($login) < 5 || mb_strlen($login) > 50){
    echo "Длина логина менее 5 или более 50 символов";
    exit();
  }
  else if(mb_strlen($password) < 5 || mb_strlen($password) > 32){
    echo "Длина пароля менее 5 или более 32 символов";
    exit();
  }
  if(mb_strlen($name) < 2 || mb_strlen($name) > 30){
    echo "Длина имени менее 2 или более 30 символов";
    exit();
  }
  $password=md5($password."gdr4");

  $mysql = new mysqli('localhost','root','','Registr');
  $mysql->query("INSERT INTO `users` (`login`, `password`, `name`) VALUES ('$login', '$password', '$name')");

  $mysql->close();
  header('Location: /index.php ');
?>
