<?php
  	$pageTitle = 'Начало';
?>
<?php	require 'includes/header.php';?>
		<div class="text-center container group-container">
      <h2 class="text-color"><?= NATURAL;?></h2>
        <div class="row">
    <div class="col-md-4">
      <a class="link_color" href="utroba_cave.php">
    <img src="assets/img/utroba_cave.jpg" class="img-responsive" alt=">Пещера утробата">
      <h5><?= UTROBA;?></h5>
      <p class="text-center"><a href="utroba_cave.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
  </a>
</div>
<div class="col-md-4">
  <a class="link_color" href="stone_mushrooms.php">
    <img src="assets/img/stone_mushrooms.jpg" class="img-responsive" alt="Каменните гъби">
      <h5><?= STONE;?></h5>
      <p class="text-center"><a  href="stone_mushrooms.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
  </a>
  </div>
<div class="col-md-4">
  <a class="link_color" href="eagle_rocks.php">
    <img src="assets/img/eagle_rocks.jpg" class="img-responsive" alt="Орлови скали">
      <h5><?= EAGLE_ROCKS;?></h5>
      <p class="text-center"><a  href="eagle_rocks.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
  </div>
  </a>
      </div>
  <div class="row">
    <a class="link_color" href="swan_village.php">
  <div class="col-md-4">
      <img src="assets/img/swan_village.jpg" class="img-responsive" alt=<?= SWAN_VILLAGE;?>>
        <h5><?= SWAN_VILLAGE;?></h5>
        <p class="text-center"><a href="swan_village.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
      </div>
      </a>
    <div class="col-md-4">
      <a class="link_color" href="forest.php">
        <img src="assets/img/main3.jpg" class="img-responsive" alt=<?= FOREST;?>>
          <h5><?= FOREST;?></h5>
          <p class="text-center"><a href="forest.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
        </a>
      </div>
          </div>
          </div>
                <?php require 'includes/footer.php' ?>
