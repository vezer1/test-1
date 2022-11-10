<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/stile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title> Контактная форма</title>

</head>
<body>
  <?php require "blocks/header.php" ?>
  <?
  if($_COOKIE['user'] == ''){
     echo '<h3>Привет Гость, доступ закрыт авторизируйтесь!</h3>'."\n";
  }

  //Если пользователь авторизовался
  else {
     //Пишем приветствие
     echo '<h4>Добро пожаловать <span style="color:red;"></h4>';
if($_GET['c'] == ''){

print "

<form>
    <input type='hidden' name='c' value='obr' />

    <b>Отзыв:</b><br>
  <textarea name='content'cols='40' rows='5'></textarea>
   <input type='submit' value='Оставить свой отзыв' />
</form>
";


$fp = fopen("comment.txt", "r"); // Открываем файл в режиме чтения
if ($fp)
{
while (!feof($fp))
{
$mytext = fgets($fp, 999);
echo $mytext."<br />";
}
}
else echo "Ошибка при открытии файла";
fclose($fp);


}elseif($_GET['c'] == 'obr'){
  // заносим в массив значение полей
  $znach = array(
    1 => $_COOKIE['user'],
    3 => $_GET['content'],
    4 => date('m.d.Y H:i'),
  );

  if( !$znach[1] ){ print "Поле <b>Имя</b>, незаполненно <br> <meta http-equiv='Refresh' content='4; url=javascript:history.go(-1);' ><a href='javascript:history.go(-1);'><<<Назад</a> <br>"; }else
   if( !$znach[3] ){ print "Поле <b>Отзыв</b>, незаполненно <br> <meta http-equiv='Refresh' content='4; url=javascript:history.go(-1);' ><a href='javascript:history.go(-1);'><<<Назад</a> <br>"; }else{


$fp = fopen("comment.txt", "a+"); // Открываем файл в режиме записи
$mytext = "\r\nИмя: ". $znach[1] . "\r\n" . "Отзыв: ". $znach[3] . "\r\nДобавлен: ". $znach[4] . "\r\n";
$test = fwrite($fp, $mytext); // Запись в файл
if ($test) echo 'Данные в файл успешно занесены.';
else echo 'Ошибка при записи в файл.';
fclose($fp); //Закрытие файла


print "<meta http-equiv='Refresh' content='0; url=?c=' >";
}
}
}
 ?>
  <?php require "blocks/footer.php" ?>
</body>

</html>
