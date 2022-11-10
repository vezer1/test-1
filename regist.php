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
  <div class="container mt-4">
    <h1>Регистрация</h1>
    <form action="checkreg.php" method="post">
      <input type="text" class="form-control" name="login" placeholder="Введите логин"><br>
      <input type="text" class="form-control" name="name" placeholder="Введите имя"><br>
      <input type="password" class="form-control" name="password" placeholder="Введите пароль"><br>
      <button  class="btn btn-success" type="submit">Отправить</button>
    </form>
  </div>
  <?php require "blocks/footer.php" ?>
</body>

</html>
