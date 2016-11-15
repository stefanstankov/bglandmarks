<?php
  	$pageTitle = 'Начало';

 		require 'includes/header.php';
?>
	<div class="container-fluid">
	<div class="main main-raised">
		<div class="section section-basic">
			<div class="container-fluid">
        <div class="row text-center">
            <div class="col-sm-4">
              <div class="thumbnail">
                <img src="assets/img/museum.jpg" alt="музей" width="400" height="300">
                <p><strong>Регионален исторически музей Кърджали</strong></p>
                <p>град Кърджали</p>
                <a id="ms" href="museum.php">
                <button class="btn" data-toggle="modal" data-target="#ms">Научи повече</button>
              </a>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="thumbnail">
                <img src="assets/img/orfei.jpg" alt="Статуята на Орфей" width="400" height="300">
                <p><strong>Статуята на Орфей</strong></p>
                <p>град Кърджали</p>
                <a id="st" href="statue.php">
                <button class="btn" data-toggle="modal" data-target="#st">Научи повече</button>
              </a>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="thumbnail">
                <img src="assets/img/dam_wall.jpg" alt="язовирната стена Кърджали" width="400" height="300">
                <p><strong>язовирна стена</strong></p>
                <p>град Кърджали</p>
                <a id="dw" href="dam_walls.php">
                <button class="btn" data-toggle="modal" data-target="#dw">Научи повече</button>
              </a>
              </div>
            </div>
          </div>
			</div>
		</div>
	</div>
	<?php require 'includes/footer.php' ?>
