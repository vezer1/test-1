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
  <div class="container mt-5">
    <h3>Контактная форма</h3>
    <form action="check.php" method="post">
      <input type="email" name="email" placeholder="Введите ваш Email для обратной связи" class="form-control"><br>
      <textarea name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea><br>
      <button type="submit" name="send" class="btn btn-success">Отправить</button>
    </form>
  </div>
  <?php require "blocks/footer.php" ?>
</body>

</html>
