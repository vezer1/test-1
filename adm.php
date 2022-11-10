<?
$NameLits = filter_var(trim($_POST['NameLits']),FILTER_SANITIZE_STRING);
$Price = filter_var(trim($_POST['Price']),FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost','root','','Registr');
$mysql->query("INSERT INTO `lits` (`NameLits`, `Price`) VALUES ('$NameLits', '$Price')");

$mysql->close();
header('Location: /info.php ');
?>
