<!doctype html>
<html lang="bg">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo.png">
	<link rel="icon" type="image/png" href="assets/img/logo.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Bulgarian Landmarks</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/material-kit.css" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body class="index-page">

	<?php require 'includes/deader.php'; ?>

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
					<div class="col-md-3">
						<div class="img">
							<a href="museum.html">
								<img src="assets/img/museum.jpg" class="responsive" alt="Museum">
							</a>
							<div class="desc">Музея в Кърджали</div>
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
	<?php require 'includes/footer.php' ?>
	</div>

	<!-- Sart Modal -->
	<div class="modal fade" id="aboutus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="material-icons">clear</i>
				</button>
					<h4 class="modal-title">За нас</h4>
				</div>
				<div class="modal-body">
					<p>
						Сайта е в процес на разработка. Моля всеки, който иска да помогне да ни изпрати снимки на забележителностите от района, в който живее. Благодаря Ви!
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!--  End Modal -->
</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="assets/js/material-kit.js" type="text/javascript"></script>

<script type="text/javascript">
	$().ready(function() {
		// the body of this function is in assets/material-kit.js
		materialKit.initSliders();
		window_width = $(window).width();

		if (window_width >= 992) {
			big_image = $('.wrapper > .header');

			$(window).on('scroll', materialKitDemo.checkScrollForParallax);
		}

	}); <
	/html>
