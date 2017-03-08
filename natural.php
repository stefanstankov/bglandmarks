<?php
  	$pageTitle = 'Начало';
?>
<?php	require 'includes/header.php';?>
		<div class="section section-basic text-center article-color container">
      <div class="row">
           <div class="col-md-12 custom_jumbo">
      <div class="jumbotron">
        <h1 class="custom-div bounceInDown"><?= WELCOME;?></h1>
        <a href="#" type="button" class="btn btn-custom" data-toggle="collapse" data-target="#demo">
      <span class="glyphicon glyphicon-info-sign"></span>
 </a>
  <form action="" method="post">
    <input type="text" class="custom-search" name"search" placeholder="Search for landmarks" />
    <a href="#" type="button" class="btn btn-custom">
  <span class="glyphicon glyphicon-search"></span>
</a>
 </form>

    <div id="demo" class="collapse">
    <?= ABOUT_BG;?>
    </div>
  </div>
  </div>
  </div>
      <h2><?= NATURAL;?></h2>
        <div class="row">
    <div class="col-md-4">
      <a class="link_color" href="utroba_cave.php">
    <img src="assets/img/utroba_cave.jpg" class="img-responsive" alt=">Пещера утробата">
    <div class="card-block">
      <h3 class="card-title"><strong><?= UTROBA;?></strong></h3>
      <p class="text-center"><a href="utroba_cave.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
    </div>
  </a>
</div>
<div class="col-md-4">
  <a class="link_color" href="stone_mushrooms.php">
    <img src="assets/img/stone_mushrooms.jpg" class="img-responsive" alt="Каменните гъби">
    <div class="card-block">
      <h3 class="card-title"><strong><?= STONE;?></strong></h3>
      <p class="text-center"><a  href="stone_mushrooms.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
    </div>
  </a>
  </div>
<div class="col-md-4">
  <a class="link_color" href="eagle_rocks.php">
    <img src="assets/img/eagle_rocks.jpg" class="img-responsive" alt="Орлови скали">
    <div class="card-block">
      <h3 class="card-title"><strong><?= EAGLE_ROCKS;?></strong></h3>
      <p class="text-center"><a  href="eagle_rocks.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
  </div>
  </a>
  </div>
  </div>
  <div class="row">
    <a class="link_color" href="swan_village.php">
  <div class="col-md-4">
      <img src="assets/img/swan_village.jpg" class="img-responsive" alt=<?= SWAN_VILLAGE;?>>
      <div class="card-block">
        <h3 class="card-title"><strong><?= SWAN_VILLAGE;?></strong></h3>
        <p class="text-center"><a href="swan_village.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
      </div>
      </a>
    </div>
    <div class="col-md-4">
      <a class="link_color" href="forest.php">
        <img src="assets/img/main3.jpg" class="img-responsive" alt=<?= FOREST;?>>
        <div class="card-block">
          <h3 class="card-title"><strong><?= FOREST;?></strong></h3>
          <p class="text-center"><a href="forest.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
        </div>
        </a>
      </div>
          </div>
          </div>
                <?php require 'includes/footer.php' ?>
