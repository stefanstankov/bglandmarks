<?php
  	$pageTitle = 'Начало';
?>
<?php	require 'includes/header.php';?>
		<div class="animated fadeInUp text-center">
      <div class="container">
        <div class="panel panel-default panel-article">
          <div class="panel-heading">
      <h1><span class="text-color1"><?= NATURAL;?></span><span class="pull-right"><a class="text-color1" href="javascript:history.go(-1)"><i class="fa fa-times" aria-hidden="true"></i></a></span></h1>
      </div>
        <div class="panel-body row">
    <div class="col-md-4">
      <a class="link_color" href="utroba_cave.php">
    <img src="assets/img/utroba_cave.jpg" class="img-responsive" alt=">Пещера утробата">
      <h5><span class="text-color"><?= UTROBA;?></span></h5>
      <p class="text-center"><a href="utroba_cave.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
  </a>
</div>
<div class="col-md-4">
  <a class="link_color" href="stone_mushrooms.php">
    <img src="assets/img/stone_mushrooms.jpg" class="img-responsive" alt="Каменните гъби">
      <h5><span class="text-color"><?= STONE;?></span></h5>
      <p class="text-center"><a  href="stone_mushrooms.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
  </a>
  </div>
<div class="col-md-4">
  <a class="link_color" href="eagle_rocks.php">
    <img src="assets/img/eagle_rocks.jpg" class="img-responsive" alt="Орлови скали">
      <h5><span class="text-color"><?= EAGLE_ROCKS;?></span></h5>
      <p class="text-center"><a  href="eagle_rocks.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
  </div>
  </a>
    <a class="link_color" href="swan_village.php">
  <div class="col-md-4">
      <img src="assets/img/swan_village.jpg" class="img-responsive" alt=<?= SWAN_VILLAGE;?>>
        <h5><span class="text-color"><?= SWAN_VILLAGE;?></span></h5>
        <p class="text-center"><a href="swan_village.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
      </div>
      </a>
    <div class="col-md-4">
      <a class="link_color" href="forest.php">
        <img src="assets/img/main3.jpg" class="img-responsive" alt=<?= FOREST;?>>
          <h5><span class="text-color"><?= FOREST;?></span></h5>
          <p class="text-center"><a href="forest.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
        </a>
      </div>
      </div>
          </div>
          </div>
          </div>
                <?php require 'includes/footer.php' ?>
