<?php
//* TODO remove debug infoo after deployment */
error_reporting(E_ALL);
ini_set('display_errors', 1);

	$pageTitle = 'Начало';
?>
<?php require 'includes/header.php' ?>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

		<div class="section section-basic text-center article-color container">
				<div class="row">
					<h2><?= STONE;?></h2>
			      <hr/>
					<div class="col-md-6">

							<div class="flexslider">
							  <ul class="slides">
							    <li>
							    	<img src="/assets/img/stone_mushrooms.jpg"/>
							    </li>
                  <li>
							    	<img src="/assets/img/stone_mushrooms1.jpg"/>
							    </li>
                  <li>
							    	<img src="/assets/img/stone_mushrooms2.jpg"/>
							    </li>
							  </ul>
							</div>

					</div>
          <div class="col-md-6">
            <div id="map"></div>
             </div>
				</div>
            <div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading alert-danger"><h3><?=MORE_INFO;?></h3></div>
 								<p>Открит е през 1965 година със задачата да проучва, съхранява и популяризира културно-историческото наследство в Източни Родопи. Основния му фонд включва над 27 000 експоната ( 40 000 до днес ) - вещи, снимки и документи, свързани с историята на
                Кърджалийския край. Експозицията е открита през 1987 година, разположена е на 1800 м2 и е разделена на три секции - отдел „Археология“, отдел „Етнография“ и отдел „Природа“. За всеки един от тях е отделен по един етаж.</p></a>
	</div>
          </div>
          </div>
						<div class="row">
					<div class="col-md-12">
					<div class="fb-comments" data-width="100%" data-numposts="5"></div>
          <ol class="breadcrumb">
        <li><strong>Линкове по темата</strong></li>
        <li><a href="https://bg.wikipedia.org/wiki/%D0%9A%D0%B0%D0%BC%D0%B5%D0%BD%D0%BD%D0%B8_%D0%B3%D1%8A%D0%B1%D0%B8"><i class="fa fa-wikipedia-w" aria-hidden="true"></i>Каменните гъби</a></li>
        <li> <a href="https://www.youtube.com/watch?v=1_HJ1DxDojE"><i class="fa fa-youtube" aria-hidden="true"></i>Каменните гъби (видео)</a></li>
      </ol>
				</div>
			</div>
			</div>
			<script>
	 function initMap() {
		 var uluru = {lat: 41.620515, lng: 25.114197};
		 var map = new google.maps.Map(document.getElementById('map'), {
			 zoom: 12,
			 center: uluru
		 });
		 var marker = new google.maps.Marker({
			 position: uluru,
			 map: map
		 });
	 }
 </script>

 <script async defer
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZI11DMzBzMJ2xcqjf4oBTk7mhYmwEZ8c&callback=initMap">
 </script>

<script>

$(window).load(function() {
	$('.flexslider').flexslider({
		animation: "slide",
		prevText: '<i class="fa fa-chevron-left" aria-hidden="true"></i>',           //String: Set the text for the "previous" directionNav item
		nextText: '<i class="fa fa-chevron-right" aria-hidden="true"></i>'               //String: Set the text for the "next" directionNav item
	});
});

</script>


				<?php require 'includes/footer.php'?>
