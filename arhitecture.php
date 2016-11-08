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
                <a id="dw" href="dam_wall.php">
                <button class="btn" data-toggle="modal" data-target="#dw">Научи повече</button>
              </a>
              </div>
            </div>
          </div>
			</div>
		</div>
	</div>
	<?php require 'includes/footer.php' ?>
