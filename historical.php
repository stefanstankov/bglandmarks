<?php
  	$pageTitle = 'Начало';
?>
   	<?php	require 'includes/header.php';?>
    <h2><?= HISTORICAL;?></h2>

    	      <div class="container-fluid cf-color">
              <div class="row conteiner">
        <div class="col-md-7 pull-left">
          <a class="link_color" href="perperikon.php">
          <img src="assets/img/perperikon.jpg" class="img-responsive" alt="Перперикон">
          <div class="card-block">
            <h3 class="card-title"><strong><?= PERPERIKON;?></strong></h3>
            <p class="text-center"><a href="perperikon.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
            </div>
            </a>
      </div>
        <div class="col-md-5">

      </div>
    </div>
    </div>
       <hr class="featurette-divider">

         <div class="container-fluid">
     <div class="row conteiner">
      <div class="col-md-5">
      </div>
        <div class="col-md-7 pull-right">
          <a  class="link_color" href="ustra.php">
            <img src="assets/img/ustra.jpg" class="img-responsive" alt="Крепостта Устра">
            <div class="card-block">
              <h3 class="card-title"><strong><?= USTRA;?></strong></h3>
              <p class="text-center"><a href="ustra.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
            </div>
              </a>
      </div>
    </div>
    </div>
        	<?php require 'includes/footer.php' ?>
