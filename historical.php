<?php
  	$pageTitle = 'Начало';
?>
   	<?php	require 'includes/header.php';?>
		<div class="text-center container">
          <h2><?= HISTORICAL;?></h2>
          <div class="row featurette">
                  <a class="link_color" href="perperikon.php">
                  <div class="col-md-7">
                    <h4 class="featurette-heading"><span class="text-muted">Perperikon Archeological Complex / Археологически комплекс Перперикон</span></h2>
                    <p><a href="perperikon.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
                  </div>
                  <div class="col-md-5">
                    <img class="featurette-image img-responsive center-block img-style" src="assets/img/perperikon.jpg" alt="<?= PERPERIKON;?>">
                  </div>
                  <a/>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                  <div class="col-md-7 col-md-push-5">
                    <h4 class="featurette-heading"><span class="text-muted">Ustra Medieval Fortress / Средновековна крепост Устра</span></h2>
                    <p><a href="perperikon.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
                  </div>
                  <div class="col-md-5 col-md-pull-7">
                    <img class="featurette-image img-responsive center-block img-style" src="assets/img/ustra.jpg" alt="<?= USTRA;?>">
                  </div>
                </div>
      </div>
        	<?php require 'includes/footer.php' ?>
