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
                <img src="assets/img/forest.jpg" alt="Вкаменената гора" width="400" height="300">
                <p><strong>Вкаменената гора</strong></p>
                <p>община Ардино/област Кърджали</p>
                <a id="fr" href="forest.php">
                <button class="btn" data-toggle="modal" data-target="#fr">Научи повече</button>
              </a>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="thumbnail">
                <img src="assets/img/stone_mushrooms.jpg" alt="Каменните гъби" width="400" height="300">
                <p><strong>Каменните гъби</strong></p>
                <p>с. Устрен/община Джебел/област Кърджали</p>
                <button class="btn" data-toggle="modal" data-target="#myModal">Научи повече</button>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="thumbnail">
                <img src="assets/img/rilski_ezera.jpg" alt="Рилските езера" width="400" height="300">
                <p><strong>Рилските езера</strong></p>
                <p>област Кърджали</p>
                <button class="btn" data-toggle="modal" data-target="#myModal">Научи повече</button>
              </div>
            </div>
          </div>
			</div>
		</div>
	</div>
	<?php require 'includes/footer.php' ?>
