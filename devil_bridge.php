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
		<div class="section section-basic db section-size">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4">
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
