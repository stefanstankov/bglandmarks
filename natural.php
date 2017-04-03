<?php
  	$pageTitle = 'Начало';
?>
<?php	require 'includes/header.php';?>
		<div class="section section-basic text-center article-color container">
      <div class="jumbotron">
        <div class="container">
        <h1 class="custom-div bounceInDown"><?= WELCOME;?></h1>
  <form action="" method="post">
    <input type="text" id="searchBar" name="search" placeholder="Search for landmarks..."/><input type="submit" id="searchBtn" value="Go!" />
 </form>

    <div id="demo" class="collapse">
      <br>
      <br>
      <table class="table table-striped table-responsive">
<thead>
<tr>
  <th>#</th>
  <th>Natural</th>
  <th>Arhitectural</th>
  <th>Historical</th>
</tr>
</thead>
<tbody>
<tr>
  <th scope="row">1</th>
  <td><a href="utroba_cave.php"><?= UTROBA;?></a></td>
  <td><a href="museum.php"><?= MUSEUM;?></a></td>
  <td><a href="ustra.php"><?= USTRA;?></a></td>
</tr>
<tr>
  <th scope="row">2</th>
  <td><a href="stone_mushrooms.php"><?= STONE;?></a></td>
  <td><a href="statue.php"><?= STATUE;?></a></td>
  <td><a href="perperikon.php"><?= PERPERIKON;?></a></td>
</tr>
<tr>
  <th scope="row">3</th>
  <td><a href="eagle_rocks.php"><?= EAGLE_ROCKS;?></a></td>
  <td><a href="dam_wall.php"><?= Kardzhali_Dam;?></a></td>
</tr>
<tr>
  <th scope="row">4</th>
  <td><a href="swan_village.php"><?= SWAN_VILLAGE;?></a></td>
  <td><a href="devil_bridge.php"><?= BRIDGE;?></a></td>
</tr>
<tr>
  <th scope="row">5</th>
  <td><a href="forest.php"><?= FOREST;?></a></a></td>
</tr>
</tbody>
</table>
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
