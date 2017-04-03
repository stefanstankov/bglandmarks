<?php
  	$pageTitle = 'Начало';
?>
<?php	require 'includes/header.php';?>
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
		<div class="text-center container">
      <h2><?= ARCHITECTURAL;?></h2>
        <div class="row">
<div class="col-md-4">
  <a class="link_color" href="museum.php">
      <img src="assets/img/museum.jpg" class="img-responsive" alt="Регионален исторически музей Кърджали">
      <div class="card-block">
        <h3 class="card-title"><strong><?= MUSEUM;?></strong></h3>
        <p class="text-center"><a href="museum.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
        </div>
        </a>
    </div>
<div class="col-md-4">
  <a class="link_color" href="statue.php">
      <img src="assets/img/orfei.jpg" class="img-responsive" alt="Статуята на Орфей">
      <div class="card-block">
        <h3 class="card-title"><strong><?= STATUE;?></strong></h3>
        <p class="text-center"><a href="statue.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
        </div>
        </a>
    </div>
<div class="col-md-4">
  <a class="link_color" href="dam_wall.php">
      <img src="assets/img/dam_wall.jpg" class="img-responsive" alt="язовирната стена Кърджали">
      <div class="card-block">
        <h3 class="card-title"><strong><?= Kardzhali_Dam;?></strong></h3>
        <p class="text-center"><a href="dam_wall.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
        </div>
        </a>
    </div>
  </div>
  <div class="row">
  <div class="col-md-4">
    <a class="link_color" href="devil_bridge.php">
  <img src="assets/img/bridge.jpg" class="img-responsive" alt="Дяволксия мост" width="318" height="180">
  <div class="card-block">
    <h3 class="card-title"><strong><?= BRIDGE;?></strong></h3>
    <p class="text-center"><a href="devil_bridge.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
    </div>
    </a>
    </div>
</div>
</div>
      <?php require 'includes/footer.php' ?>
