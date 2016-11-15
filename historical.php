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
                <img src="assets/img/bridge.jpg" alt="Дяволксия мост" width="400" height="300">
                <p><strong>Дяволксия мост</strong></p>
                <p>община Ардино/област Кърджали</p>
                <a id="db" href="devil_bridge.php">
                <button class="btn" data-toggle="modal" data-target="#db">Научи повече</button>
              </a>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="thumbnail">
                <img src="assets/img/ustra.jpg" alt="Крепостта Устра" width="400" height="300">
                <p><strong>Крепост Устра</strong></p>
                <p>с. Устрен/община Джебел/област Кърджали</p>
                <button class="btn" data-toggle="modal" data-target="#myModal">Научи повече</button>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="thumbnail">
                <img src="assets/img/perperikon.jpg" alt="Перперикон" width="400" height="300">
                <p><strong>Перперикон</strong></p>
                <p>област Кърджали</p>
                <button class="btn" data-toggle="modal" data-target="#myModal">Научи повече</button>
              </div>
            </div>
          </div>
			</div>
		</div>
	</div>
	<?php require 'includes/footer.php' ?>
