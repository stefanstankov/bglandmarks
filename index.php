<?php
  	$pageTitle = 'Начало';

 		require 'includes/header.php';
?>

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
	<div class="main main-raised">
		<div class="section section-basic">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
		</button>

						</div>
						<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
							<ul class="nav row text-center">
								<li class="col-md-3"><a href="#"><span class="glyphicon glyphicon-tower " aria-hidden="true"></span>Исторически</a></li>
								<li class="col-md-3"><a href="#"><i class="fa fa-tree" aria-hidden="true"></i>Природни
								</a></li>
								<li class="col-md-3"><a href="#"><i class="fa fa-university" aria-hidden="true"></i>Архитектурни</a></li>
								<li class="col-md-3 dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i aria-hidden="true" class="fa fa-picture-o"></i> Галерия <b class="caret"></b>
												</a>
									<ul id="menu-center" class="dropdown-menu">
										<li><a href="#">Исторически</a></li>
										<li><a href="#">Природни</a></li>
										<li><a href="#">Архитектурни</a></li>
									</ul>
								</li>
						</div>
					</div>
					</nav>
				</div>
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
			</div>
		</div>
	</div>
	<?php require 'includes/footer.php' ?>
