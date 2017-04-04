<?php
  	$pageTitle = 'Начало';
?>
   	<?php	require 'includes/header.php';?>



    	      <div class="container text-center">
    <h1 class="text-center"><?= HISTORICAL;?></h1>
    <div class="row">
<div class="col-md-4">
<a class="link_color" href="perperikon.php">
<img src="assets/img/perperikon.jpg" class="img-responsive" alt="<?= PERPERIKON;?>">
<div class="card-block">
<h3 class="card-title"><strong><?= PERPERIKON;?></strong></h3>
<p class="text-center"><a href="perperikon.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
</div>
</a>
</div>
<div class="col-md-4">
<a class="link_color" href="ustra.php">
<img src="assets/img/ustra.jpg" class="img-responsive" alt="<?= USTRA;?>">
<div class="card-block">
<h3 class="card-title"><strong><?= USTRA;?></strong></h3>
<p class="text-center"><a  href="ustra.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
</div>
</a>
</div>
</div>
    </div>
        	<?php require 'includes/footer.php' ?>
