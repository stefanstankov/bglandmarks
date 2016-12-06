<?php
  	$pageTitle = 'Начало';
?>
<?php	require 'includes/header.php';?>
		<div class="section section-basic text-center article-color1 article-color container">
      <h2><?= NATURAL;?></h2>
        <div class="row">
    <div class="col-md-4">
      <a class="link_color" href="utroba_cave.php">
      <div class="card">
    <img src="assets/img/utroba_cave.jpg" class="card-img-top" alt=">Пещера утробата" width="318" height="180">
    <div class="card-block">
      <h3 class="card-title"><strong><?= UTROBA;?></strong></h3>
      <hr>
      <p class="card-text"><?= UTROBA_SHORT;?></p>
      <p class="text-center"><a href="utroba_cave.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
      </div>
    </div>
  </a>
</div>
<div class="col-md-4">
  <a class="link_color" href="stone_mushrooms.php">
  <div class=" card">
    <img src="assets/img/stone_mushrooms.jpg" class="card-img-top" alt="Каменните гъби" width="318" height="180">
    <div class="card-block">
      <h3 class="card-title"><strong><?= STONE;?></strong></h3>
      <hr>
      <p class="card-text"><?= STONE_SHORT;?></p>
      <p class="text-center"><a  href="stone_mushrooms.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
    </div>
    </div>
  </a>
  </div>
<div class="col-md-4">
  <a class="link_color" href="eagle_rocks.php">
  <div class="card">
    <img src="assets/img/eagle_rocks.jpg" class="card-img-top" alt="Орлови скали" width="318" height="180">
    <div class="card-block">
      <h3 class="card-title"><strong><?= EAGLE_ROCKS;?></strong></h3>
      <hr>
      <p class="card-text"><?= ROCKS_SHORT;?></p>
      <p class="text-center"><a  href="eagle_rocks.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
    </div>
  </div>
  </a>
  </div>
  </div>
  <div class="row">
    <a class="link_color" href="swan_village.php">
  <div class="col-md-4">
    <div class="card">
      <img src="assets/img/swan_village.jpg" class="card-img-top" alt=<?= SWAN_VILLAGE;?> width="318" height="180">
      <div class="card-block">
        <h3 class="card-title"><strong><?= SWAN_VILLAGE;?></strong></h3>
        <hr>
        <p class="card-text"><?= SWAN_SHORT;?></p>
        <p class="text-center"><a href="swan_village.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
      </div>
      </div>
      </a>
    </div>
    <div class="col-md-4">
      <a class="link_color" href="forest.php">
      <div class="card">
        <img src="assets/img/main3.jpg" class="card-img-top" alt=<?= FOREST;?> width="318" height="180">
        <div class="card-block">
          <h3 class="card-title"><strong><?= FOREST;?></strong></h3>
          <hr>
          <p class="card-text"><?= FOREST_SHORT;?></p>
          <p class="text-center"><a href="forest.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
        </div>
        </div>
        </a>
      </div>
          </div>
          </div>
                <?php require 'includes/footer.php' ?>
