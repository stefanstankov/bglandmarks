<?php
//* TODO remove debug infoo after deployment */
error_reporting(E_ALL);
ini_set('display_errors', 1);

	$pageTitle = 'Начало';
?>
<?php require 'includes/header.php' ?>
	<!-- End Navbar					 -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<div class="main main-raised museumpage">
		<div class="section section-basic db">
			<div class="container-fluid">
				<div class="row">
						<!--
					<div class="col-md-6">
						<div id="main">
					<div id="main-inner">
					<div id="slider">
					<img src="img/devil_bridge/cS-1.jpg"/>
					<img src="img/devil_bridge/cS-2.jpg"/>
					<img src="img/devil_bridge/cS-3.jpg"/>
					</div>
					</div>
					</div>
					</div>
					-->
					<div id="carousel1" class="col-md-12">
						<div class="container-fluid">
							<div  class="carousel slide" data-interval="3000" data-ride="carousel">
								<!-- Carousel indicators -->
								<ol class="carousel-indicators">
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1"></li>
									<li data-target="#myCarousel" data-slide-to="2"></li>
								</ol>
								<!-- Wrapper for carousel items -->
								<div class="carousel-inner">
									<div class="active item">
										<img src="img/devil_bridge/cS-1.jpg" alt="First Slide">
										<div class="carousel-caption">
											<h4><a href="http://maps.google.com/?q=kardzhali" target="__blank"><i class="material-icons">location_on</i>Кърджали</a></h4>
										</div>
									</div>
									<div class="item">
										<img src="img/devil_bridge/cS-2.jpg" alt="Second Slide">
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
					<div class="col-md-6">

				</div>
			</div>
						<hr/>
            <div>
					<div class="col-md-8">
						<div class="panel panel-info">
							<div class="panel-heading panel-info"><h3>Допълнителна информация</h3></div>
 								<p>Открит е през 1965 година със задачата да проучва, съхранява и популяризира културно-историческото наследство в Източни Родопи. Основния му фонд включва над 27 000 експоната ( 40 000 до днес ) - вещи, снимки и документи, свързани с историята на
                Кърджалийския край. Експозицията е открита през 1987 година, разположена е на 1800 м2 и е разделена на три секции - отдел „Археология“, отдел „Етнография“ и отдел „Природа“. За всеки един от тях е отделен по един етаж.</p></a>
	</div>
          </div>
					<div class="col-md-4">
						<div class="panel panel-info">
	            <div class="panel-heading panel-info"><h3>Линкове по темата</h3></div>
	  <a href="https://bg.wikipedia.org/wiki/%D0%94%D1%8F%D0%B2%D0%BE%D0%BB%D1%81%D0%BA%D0%B8_%D0%BC%D0%BE%D1%81%D1%82_(%D0%9E%D0%B1%D1%89%D0%B8%D0%BD%D0%B0_%D0%90%D1%80%D0%B4%D0%B8%D0%BD%D0%BE)" class="list-group-item"><i class="fa fa-wikipedia-w" aria-hidden="true"></i>Дяволски мост (Община Ардино)</a>
	    <a href="https://www.youtube.com/watch?v=8JwftffRd64" class="list-group-item"><i class="fa fa-youtube" aria-hidden="true"></i>Дяволски мост (видео)</a>
	</div>
				</div>
							</div>
						<div class="row row-color1">
					<div class="col-md-12">
						<hr/>
					<div class="fb-comments" data-width="100%" data-numposts="5"></div>
				</div>
				</div>
		</div>
	</div>
	</div>
	<script>
	$(function() {
      $('#slider').miniSlider();
    });
	</script>
<?php require 'includes/footer.php'?>
