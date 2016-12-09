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
					<h2><?= EAGLE_ROCKS;?></h2>
			      <hr/>
					<div class="col-md-8 col-md-offset-2">

							<div class="flexslider">
							  <ul class="slides">
							    <li>
							    	<img src="/assets/img/eagle_rocks.jpg"/>
							    </li>
							    <li>
							    	<img src="/assets/img/eagle_rocks1.jpg"/>
							    </li>
							    <li>
							  		<img src="/assets/img/eagle_rocks2.jpg"/>
							    </li>
							  </ul>
							</div>
						</div>
					</div>
            <div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading alert-danger"><h3><?=MORE_INFO;?></h3></div>
 								<p><?= EAGLE_ROCKS_ARTICLE;?></p></a>
	</div>
          </div>
					</div>
					<div class="row">
						<div class="col-md-6">
						<div id="custom_video" class="embed-responsive embed-responsive-16by9">
	  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EVB2pXBqoGM"></iframe>
	</div>
	      </div>
						<div class="col-md-6">
							 <div id="map"></div>
				</div>
								</div>
						<div class="row">
					<div class="col-md-12">
					<div class="fb-comments" data-width="100%" data-numposts="5"></div>
					<ol class="breadcrumb">
				<li><strong>Линкове по темата</strong></li>
				<li><a href="https://bg.wikipedia.org/wiki/%D0%9E%D1%80%D0%BB%D0%BE%D0%B2%D0%B8_%D1%81%D0%BA%D0%B0%D0%BB%D0%B8"><i class="fa fa-wikipedia-w" aria-hidden="true"></i>Орлови скали</a></li>
				<li> <a href="https://en.wikipedia.org/wiki/Orlovi_Skali"><i class="fa fa-wikipedia-w" aria-hidden="true"></i>Orlovi skali)</a></li>
			</ol>
				</div>
			</div>
</div>
			<script>
	 function initMap() {
		 var uluru = {lat: 41.565967, lng: 25.145898};
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
