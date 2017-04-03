<?php
//* TODO remove debug infoo after deployment */
error_reporting(E_ALL);
ini_set('display_errors', 1);

	$pageTitle = 'Начало';
?>
<?php require 'includes/header.php' ?>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

		<div class="text-center container">
				<div class="row">
					<h2><?= STATUE;?></h2>
			      <hr/>
					<div class="col-md-8 col-md-offset-2">

							<div class="flexslider">
							  <ul class="slides">
							    <li>
							    	<img src="/assets/img/orfei.jpg"/>
							    </li>
							    <li>
							    	<img src="/assets/img/statue1.jpg"/>
							    </li>
                  <li>
							    	<img src="/assets/img/statue2.jpg"/>
							    </li>
							  </ul>
							</div>
</div>
					</div>
            <div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading alert-danger"><h3><?=MORE_INFO;?></h3></div>
 								<p><?= STATUE_ARTICLE;?></p></a>
	</div>
          </div>
					</div>
					<div class="row">
						<div class="col-md-6">
						<div id="custom_video" class="embed-responsive embed-responsive-16by9">
	  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dn9alP8-bMU"></iframe>
	</div>
	      </div>
				<div class="col-md-6">
					<div id="map"></div>
			</div>
			</div>
						<div class="row">
					<div class="col-md-12">
					<div class="fb-comments" data-width="100%" data-numposts="5"></div>
					<div class="fb-share-button pull-left" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
				<h2><?= FROM_CATEGORY;?></h2>
				<table class="table">
					<thead>
						<tr>
							<th><?= LANDMARK_NAME;?></th>
						</tr>
					</thead>
					<tbody class="text-left">
						<tr>
							<td><a href="museum.php"><?= MUSEUM;?></a></td>
						</tr>
							<tr>
							<td><a href="dam_wall.php"><?= Kardzhali_Dam;?></a></td>
						</tr>
						<tr>
							<td><a href="devil_bridge.php"><?= BRIDGE;?></a></td>
					</tr>
					</tbody>
					</table>
			</div>
				</div>
			</div>

			<script>
	 function initMap() {
		 var uluru = {lat: 41.671968, lng: 25.363943};
		 var map = new google.maps.Map(document.getElementById('map'), {
			 zoom: 12,
			 scrollwheel:false,
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
