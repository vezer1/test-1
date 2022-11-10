<!DOCTYPE html>
<?php
  $my_image2 = 'img/8.jpg';


?>
<html lang='ru'>
<head>
  <section class="img_offer" id="img_offer" style="background: linear-gradient(90deg, rgba(44, 70, 137, 0.5) 0%, rgba(44, 65, 137, 0.3) 68.23%, rgba(44, 75, 137, 0.1) 100%), url('<?php echo $my_image2; ?>') no-repeat center center; background-size: cover">
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
    if($_COOKIE['user'] == 'Vezer1') { ?>
  <div class="container mt-4">
    <h1>Добавить товар</h1>
    <form action="adm.php" method="post">
      <textarea name='NameLits'cols='40' rows='1'></textarea><br>
      <textarea name='Price'cols='20' rows='1'></textarea>
      <button  class="btn btn-success" type="submit">Опубликовать</button>
    </form>
    <? }
    if($_COOKIE['user'] != '' || $_COOKIE['user'] == ''){
    $link1 = mysqli_connect('localhost','root','','Registr');
  $sql1 = mysqli_query($link1, 'SELECT `id_lits`, `NameLits`, `Price` FROM `lits`');
  while ($result1 = mysqli_fetch_array($sql1)) {
    echo "{$result1['NameLits']}: {$result1['Price']} рублей <br>";
  }
}
  ?>
  </div>

  <?php require "blocks/footer.php" ?>
</body>

</html>
