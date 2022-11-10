<!DOCTYPE html>
<?php
  $my_image1 = 'img/tf2.gif';


?>
<html lang='ru'>
<head>
  <section class="img_offer" id="img_offer" style="background: linear-gradient(90deg, rgba(44, 70, 137, 0.5) 0%, rgba(44, 65, 137, 0.3) 68.23%, rgba(44, 75, 137, 0.1) 100%), url('<?php echo $my_image1; ?>') no-repeat center center; background-size: cover">
    <meta charset='utf-8'>
    <meta name='viewport' content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/stile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title> Аптека "Мир"</title>


</head>
<body>
  <?php require "blocks/header.php" ?>
    <div class="container mt-5">
      <h2>Наша аптека – одна из многочисленных российских сетей, занимающая ведущие позиции в аптечном бизнесе. Учреждения предлагают своим клиентам высококачественные лекарственные препараты, а также сопутствующие товары. Внимательное отношение к покупателям, доступные цены – основные приоритеты торговой марки.</h2>
      <h3> Обновления </h3>
      <div class="d-flex flex-wrap">
      <?php
       for ($i=0;$i<3;$i++):
       ?>
       <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal"> Изменение <?php echo ($i + 1) ?> <h4>
        </div>
        <div class="card-body">
                  <img src="img/<?php echo ($i + 1) ?>.jpg" width="200" height="222" alt="" class="img-thumbnail">
                  <ul class="list-unstyled mt-3 mb-4">
                    <li>В данном обновление</li>
          <button type="button" class="btn btn-lg btn-block btn-outline-primary">Подробнее...</button>
        </div>
      </div>
    <?php endfor; ?>
     </div
    </div>
  <?php require "blocks/footer.php" ?>
</body>
</html>
