<?php
  	$pageTitle = 'Начало';

 		require 'includes/header.php';
?>
        <div class="conteiner-fluid">
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
            <div class="row main-pic">
              <div class="col-md-4">
                <div class="container-fluid bg-1 text-center">
                  <img src="assets/img/main1.jpg" class="img-responsive img-circle margin" style="display:inline" alt="RILA">
                </div>
    						</div>
                <div class="col-md-4">
                  <div class="container-fluid bg-1 text-center">
                    <img src="assets/img/main.JPG" class="img-responsive img-circle margin" style="display:inline" alt="RILA">
                  </div>
      						</div>
                  <div class="col-md-4">
                    <div class="container-fluid bg-1 text-center">
                      <img src="assets/img/main2.jpg" class="img-responsive img-circle margin" style="display:inline" alt="RILA">
                    </div>
        						</div>
    					</div>
              </div>
	<?php require 'includes/footer.php' ?>
