<?php
  	$pageTitle = 'Начало';

 		require 'includes/header.php';
?>
<div class="row">
  <div class="col-md-12">
    <div class="container-fluid">
      <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
          <div class="active item">
            <img src="assets/img/4.jpg" alt="First Slide">
            <div class="carousel-caption">
              <h4><a href="http://maps.google.com/?q=kardzhali" target="__blank"><i class="material-icons">location_on</i>Кърджали</a></h4>
            </div>
          </div>
          <div class="item">
            <img src="assets/img/rav4.jpg" alt="Second Slide">
            <div class="carousel-caption">
              <h4><a href="http://maps.google.com/?q=ravadinovo" target="__blank"><i class="material-icons">location_on</i>Равадиново</h4>
            </div>
          </div>
          <div class="item">
            <img src="assets/img/melnik.jpg" alt="Third Slide" />
            <div class="carousel-caption">
              <h4><a href="http://maps.google.com/?q=melnik" target="__blank"><i class="material-icons">location_on</i>Мелник</h4>
            </div>
          </div>
        </div>
        <!-- Carousel controls -->
        <a data-slide="prev" href="#myCarousel" class="left carousel-control">
          <i class="material-icons">keyboard_arrow_left</i>
        </a>
        <a data-slide="next" href="#myCarousel" class="right carousel-control">
          <i class="material-icons">keyboard_arrow_right</i>
        </a>
      </div>
    </div>
    </div>
  </div>
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
