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
            <div class="demo">
                    <div class="item">
                        <div class="clearfix" style="max-width:474px;">
                            <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                <li data-thumb="../img/devil_bridge/thumb/cS-1.jpg">
                                    <img src="../img/devil_bridge/cS-1.jpg" />
                                     </li>
                                <li data-thumb="../img/devil_bridge/thumb/cS-2.jpg">
                                    <img src="../img/devil_bridge/cS-2.jpg" />
                                     </li>
                                <li data-thumb="../img/devil_bridge/thumb/cS-3.jpg">
                                    <img src="../img/devil_bridge/cS-3.jpg" />
                                     </li>
                            </ul>
                        </div>
                    </div>
                </div>
					</div>
					<div class="col-md-6">

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
        </div>s
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
<?php require 'includes/footer.php'?>
