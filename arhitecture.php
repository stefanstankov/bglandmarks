<?php
  	$pageTitle = 'Начало';
?>
<?php	require 'includes/header.php';?>
		<div class="text-center container group-container">
      <h2 class="text-color1"><?= ARCHITECTURAL;?></h2>
        <div class="row">
<div class="col-md-4">
  <a class="link_color" href="museum.php">
      <img src="assets/img/museum.jpg" class="img-responsive" alt="Регионален исторически музей Кърджали">
        <h5><span class="text-color"><?= MUSEUM;?></span></h5>
        <p class="text-center"><a href="museum.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
        </a>
    </div>
<div class="col-md-4">
  <a class="link_color" href="statue.php">
      <img src="assets/img/orfei.jpg" class="img-responsive" alt="Статуята на Орфей">
        <h5><span class="text-color"><?= STATUE;?></span></h5>
        <p class="text-center"><a href="statue.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
        </a>
    </div>
<div class="col-md-4">
  <a class="link_color" href="dam_wall.php">
      <img src="assets/img/dam_wall.jpg" class="img-responsive" alt="язовирната стена Кърджали">
        <h5><span class="text-color"><?= Kardzhali_Dam;?></span></h5>
        <p class="text-center"><a href="dam_wall.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
        </a>
    </div>
  </div>
  <div class="row">
  <div class="col-md-4">
    <a class="link_color" href="devil_bridge.php">
  <img src="assets/img/bridge.jpg" class="img-responsive" alt="Дяволксия мост">
    <h5><span class="text-color"><?= BRIDGE;?></span></h5>
    <p class="text-center"><a href="devil_bridge.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
    </a>
    </div>
</div>
</div>
      <?php require 'includes/footer.php' ?>
