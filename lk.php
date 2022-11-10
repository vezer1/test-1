<!DOCTYPE html>

<?php
  $my_image = 'img/ft4.gif';
  //echo "<body style=\"color: #FF0000; background-image: url(\'https://avatars.mds.yandex.net/i?id=03bf57afebab3f15ad8cc6f1f728817e-5220930-images-thumbs&n=13\')\">";

?>
<html lang='ru'>
<head>
  <body style="background-image: url('<?php echo $my_image; ?>')">
    <meta charset='utf-8'>
    <meta name='viewport' content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/stile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title> Контактная форма</title>
  </body>

</head>
<body>
  <?php require "blocks/header.php" ?>
  <div class="container mt-4">
   <h1>Страница на доработке, в будущем вы сможете устанавливать собственную аватарку и менять пароль и настройки</h1>
 </div>
  <?php require "blocks/footer.php" ?>
</body>

</html>
