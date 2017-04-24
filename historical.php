<?php
  	$pageTitle = 'Начало';
?>
   	<?php	require 'includes/header.php';?>
    <div class="view">
    <div class="animated fadeInUp text-center flex-center">
      <div class="container">
        <div class="panel panel-default panel-article">
          <div class="panel-heading">
    <h1><span class="text-color1"><?= HISTORICAL;?></span><span class="pull-right"><a class="text-color1" href="javascript:history.go(-1)"><i class="fa fa-times" aria-hidden="true"></i></a></span></h1>
      </div>
<div class="panel-body row">
<div class="col-md-4">
<a class="link_color" href="perperikon.php">
<img src="assets/img/perperikon.jpg" class="img-responsive" alt="<?= PERPERIKON;?>">
<h5><span class="text-color"><?= PERPERIKON;?></span></h5>
<p class="text-center"><a href="perperikon.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
</a>
</div>
<div class="col-md-4">
<a class="link_color" href="ustra.php">
<img src="assets/img/ustra.jpg" class="img-responsive" alt="<?= USTRA;?>">
<h5><span class="text-color"><?= USTRA;?></span></h5>
<p class="text-center"><a  href="ustra.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
</div>
</a>
</div>
</div>
    </div>
      </div>
      </div>
        	<?php require 'includes/footer.php' ?>
