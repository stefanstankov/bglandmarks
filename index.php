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
            	<!--
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
        -->
        <div class="navbar navbar-inverse navbar-fixed-left">
  <a class="navbar-brand" href="#">Brand</a>
  <ul class="nav navbar-nav">
   <li><a href="#"><span class="glyphicon glyphicon-tower " aria-hidden="true"></span>Исторически</a></li>
   <li><a href="#"><i class="fa fa-tree" aria-hidden="true"></i>Природни
   </a></li>
   <li><a href="#"><i class="fa fa-university" aria-hidden="true"></i>Архитектурни</a></li>
      <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Галерия<span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
      <li><a href="#">Sub Menu1</a></li>
      <li><a href="#">Sub Menu2</a></li>
      <li><a href="#">Sub Menu3</a></li>
     </ul>
   </li>
  </ul>
</div>
	<!--
				<div class="row">
					<div class="col-md-3">
						<div class="img">
							<a href="museum.php">
								<img src="assets/img/museum.jpg" class="responsive" alt="Museum">
							</a>
							<div class="desc">Регионален исторически музей Кърджали</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="img">
							<a href="#">
								<img src="assets/img/orfei.jpg" class="responsive" alt="statue">
							</a>
							<div class="desc">Статуята на Орфей</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="img">
							<a href="#">
								<img src="assets/img/perperikon.jpg" class="responsive" alt="perperikon">
							</a>
							<div class="desc">Перперикон</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="img">
							<a href="#">
								<img src="assets/img/ustra.jpg" class="responsive" alt="ustra">
							</a>
							<div class="desc">Крепостта Устра</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="img">
							<a href="#">
								<img src="assets/img/forest.jpg" class="responsive" alt="stone forest">
							</a>
							<div class="desc">Вкаменената гора</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="img">
							<a href="#">
								<img src="assets/img/stone_mushrooms.jpg" class="responsive" alt="stone mushrooms">
							</a>
							<div class="desc">Каменните гъби</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="img">
							<a href="#">
								<img src="assets/img/rilski_ezera.jpg" class="responsive" alt="rila">
							</a>
							<div class="desc">Рилските езера</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="img">
							<a href="#">
								<img src="assets/img/dam_wall.jpg" class="responsive" alt="dam wall">
							</a>
							<div class="desc">язовирната стена Кърджали</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
      -->
	<?php require 'includes/footer.php' ?>
