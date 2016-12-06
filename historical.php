<?php
  	$pageTitle = 'Начало';
?>
   	<?php	require 'includes/header.php';?>
		<div class="section section-basic text-center article-color article-color1 container">
          <h2><?= HISTORICAL;?></h2>
              <div class="row">
        <div class="col-md-4">
          <a  class="link_color" href="ustra.php">
            <div class="card">
            <img src="assets/img/ustra.jpg" class="card-img-top" alt="Крепостта Устра" width="318" height="180">
            <div class="card-block">
              <h3 class="card-title"><strong><?= USTRA;?></strong></h3>
              <p class="text-center"><a href="ustra.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
            </div>
              </div>
              </a>
        </div>
    	    <div class="col-md-4">
            <a class="link_color" href="perperikon.php">
              <div class="card">
            <img src="assets/img/perperikon.jpg" class="card-img-top" alt="Перперикон" width="318" height="180">
            <div class="card-block">
              <h3 class="card-title"><strong><?= PERPERIKON;?></strong></h3>
              <p class="text-center"><a href="perperikon.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
            </div>
              </div>
              </a>
        </div>
			</div>
      </div>
        	<?php require 'includes/footer.php' ?>
