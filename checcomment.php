<?
$NameUser = $_COOKIE['user'];
$comment = filter_var(trim($_POST['comment']),FILTER_SANITIZE_STRING);
if(mb_strlen($comment) < 5 || mb_strlen($comment) > 100){
  echo "Длина комментария менее 5 или более 100 символов";
  exit();
}
$mysql = new mysqli('localhost','root','','Registr');
$mysql->query("INSERT INTO `comments` (`NameUser`, `comment`) VALUES ('$NameUser', '$comment')");

$mysql->close();
header('Location: /comments.php ');
?>
