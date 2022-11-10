<!DOCTYPE html>
<?php
  $my_image3 = 'img/9.jpg';


?>
<html lang='ru'>
<head>
  <section class="img_offer" id="img_offer" style="background: linear-gradient(90deg, rgba(44, 70, 137, 0.5) 0%, rgba(44, 65, 137, 0.3) 68.23%, rgba(44, 75, 137, 0.1) 100%), url('<?php echo $my_image3; ?>') no-repeat center center; background-size: cover">
    <meta charset='utf-8'>
    <meta name='viewport' content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/stile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title> Контактная форма</title>

</head>
<body>
  <?php require "blocks/header.php" ?>
  <?  if($_COOKIE['user'] == ''){
       echo '<h3>Привет Гость, доступ закрыт авторизируйтесь!</h3>'."\n";
    }
    else { ?>
  <div class="container mt-4">
    <h1>Отзыв:</h1>
    <form action="checcomment.php" method="post">
      <textarea name='comment'cols='40' rows='5'></textarea>
      <button  class="btn btn-success" type="submit">Отправить</button>
    </form>
    <?php
    $link = mysqli_connect('localhost','root','','Registr');
  $sql = mysqli_query($link, 'SELECT `id_comment`, `NameUser`, `comment` FROM `comments`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['NameUser']}: {$result['comment']} <br>";
  }
  ?>
  </div>

<? }?>
  <?php require "blocks/footer.php" ?>
</body>

</html>
