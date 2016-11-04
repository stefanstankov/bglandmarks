<?php
//* TODO remove debug infoo after deployment */
error_reporting(E_ALL);
ini_set('display_errors', 1);

	$pageTitle = 'Начало';
?>
<?php require 'includes/header.php' ?>
	<!-- End Navbar -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<div class="main main-raised museumpage">
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
				<hr/>
				<div class="row">
					<div class="col-md-4">
						<div class="img">
							<img src="assets/img/museum.jpg" class="responsive img-zoom" alt="Museum">
						</div>
					</div>
						<div class="col-md-4">
							<div class="img">
								<img src="assets/img/museum1.jpg" class="responsive img-zoom" alt="Museum">
							</div>
						</div>
						</div>
						<hr/>
						<div class="row">
							<div class="col-md-12">
						<div id="museum">
							<p>
								<h3 class="title_position">Допълнителна информация</h3></p>
							<p>Открит е през 1965 година със задачата да проучва, съхранява и популяризира културно-историческото наследство в Източни Родопи. Основния му фонд включва над 27 000 експоната ( 40 000 до днес ) - вещи, снимки и документи, свързани с историята на
								Кърджалийския край. Експозицията е открита през 1987 година, разположена е на 1800 м2 и е разделена на три секции - отдел „Археология“, отдел „Етнография“ и отдел „Природа“. За всеки един от тях е отделен по един етаж.</p>
						</div>
						</div>
					</div>
					<div class="col-md-12">
						<hr/>
					<div class="fb-comments" data-width="100%" data-numposts="5"></div>
				</div>
				</div>
			</div>
		</div>
	</div>
	</div>
<?php require 'includes/footer.php'?>
