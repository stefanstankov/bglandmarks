<?php
  	$pageTitle = 'Начало';
?>
<?php	require 'includes/header.php';?>
		<div class="section section-basic text-center article-color container">
      <h2><?= ARCHITECTURAL;?></h2>
        <div class="row">
<div class="col-md-4">
  <a class="link_color" href="museum.php">
  <div class="card">
      <img src="assets/img/museum.jpg" class="img-responsive" alt="Регионален исторически музей Кърджали">
      <div class="card-block">
        <h3 class="card-title"><strong><?= MUSEUM;?></strong></h3>
        <p class="text-center"><a href="museum.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
      </div>
        </div>
        </a>
    </div>
<div class="col-md-4">
  <a class="link_color" href="statue.php">
  <div class="card">
      <img src="assets/img/orfei.jpg" class="img-responsive" alt="Статуята на Орфей">
      <div class="card-block">
        <h3 class="card-title"><strong><?= STATUE;?></strong></h3>
        <p class="text-center"><a href="statue.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
      </div>
        </div>
        </a>
    </div>
<div class="col-md-4">
  <a class="link_color" href="dam_wall.php">
  <div class="card">
      <img src="assets/img/dam_wall.jpg" class="img-responsive" alt="язовирната стена Кърджали">
      <div class="card-block">
        <h3 class="card-title"><strong><?= Kardzhali_Dam;?></strong></h3>
        <p class="text-center"><a href="dam_wall.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
      </div>
        </div>
        </a>
    </div>
  </div>
  <div class="row">
  <div class="col-md-4">
    <a class="link_color" href="devil_bridge.php">
    <div class="card">
  <img src="assets/img/bridge.jpg" class="img-responsive" alt="Дяволксия мост" width="318" height="180">
  <div class="card-block">
    <h3 class="card-title"><strong><?= BRIDGE;?></strong></h3>
    <p class="text-center"><a href="devil_bridge.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
  </div>
    </div>
    </a>
    </div>
</div>
</div>
      <?php require 'includes/footer.php' ?>
