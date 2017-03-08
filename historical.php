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
          <h2><?= HISTORICAL;?></h2>
              <div class="row">
        <div class="col-md-4">
          <a  class="link_color" href="ustra.php">
            <img src="assets/img/ustra.jpg" class="img-responsive" alt="Крепостта Устра">
            <div class="card-block">
              <h3 class="card-title"><strong><?= USTRA;?></strong></h3>
              <p class="text-center"><a href="ustra.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
            </div>
              </a>
        </div>
    	    <div class="col-md-4">
            <a class="link_color" href="perperikon.php">
            <img src="assets/img/perperikon.jpg" class="img-responsive" alt="Перперикон">
            <div class="card-block">
              <h3 class="card-title"><strong><?= PERPERIKON;?></strong></h3>
              <p class="text-center"><a href="perperikon.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
              </div>
              </a>
        </div>
			</div>
      </div>
        	<?php require 'includes/footer.php' ?>
