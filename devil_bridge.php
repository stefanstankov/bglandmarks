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
		<div class="section section-basic db">
			<div class="container-fluid">
				<div class="row">
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
					<div class="col-md-6">

				</div>
			</div>
						<hr/>
            <div class="row">
					<div class="col-md-4">
            <div id="museum">
              <p>
                <h3 align="center">Допълнителна информация</h3></p>
              <p>Открит е през 1965 година със задачата да проучва, съхранява и популяризира културно-историческото наследство в Източни Родопи. Основния му фонд включва над 27 000 експоната ( 40 000 до днес ) - вещи, снимки и документи, свързани с историята на
                Кърджалийския край. Експозицията е открита през 1987 година, разположена е на 1800 м2 и е разделена на три секции - отдел „Археология“, отдел „Етнография“ и отдел „Природа“. За всеки един от тях е отделен по един етаж.</p>
            </div>
          </div>
					<div class="col-md-4">
						<p><h3 align="center">Линкове по темата</h3></p>
						</div>
        </div>
						<div class="row">
					<div class="col-md-12">
						<hr/>
					<div class="fb-comments" data-width="100%" data-numposts="5"></div>
				</div>
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
