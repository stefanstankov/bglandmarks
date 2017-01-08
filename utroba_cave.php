<?php
//* TODO remove debug infoo after deployment */
error_reporting(E_ALL);
ini_set('display_errors', 1);

	$pageTitle = 'Начало';
?>
<?php require 'includes/header.php' ?>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

		<div class="section section-basic text-center article-color  container">
				<div class="row">
					<h2><?= UTROBA;?></h2>
			      <hr/>
					<div class="col-md-8">

							<div class="flexslider">
							  <ul class="slides">
							    <li>
							    	<img src="/assets/img/utroba_cave.jpg"/>
							    </li>
							    <li>
							    	<img src="/assets/img/utroba_cave1.jpg"/>
							    </li>
							    <li>
							  		<img src="/assets/img/utroba_cave2.jpg"/>
							    </li>
							  </ul>
							</div>
</div>
<div class="col-md-4">
	<div id="weather"></div>
		</div>
					</div>
						<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading alert-danger"><h3><?=MORE_INFO;?></h3></div>
 								<p><?= UTROBA_ARTICLE;?></p></a>
	</div>
				</div>
				</div>
            <div class="row">
					<div class="col-md-6">
					<div id="custom_video" class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ucQ0k-_69pY"></iframe>
</div>
      </div>
			<div class="col-md-6">
				<div id="map"></div>
			</div>
							</div>
						<div class="row">
					<div class="col-md-12">
					<div class="fb-comments" data-width="100%" data-numposts="5"></div>
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
							<td><a href="stone_mushrooms.php"><?= STONE;?></a></td>
						</tr>
						<tr>
							<td><a href="eagle_rocks.php"><?= EAGLE_ROCKS;?></a></td>
						</tr>
							<tr>
							<td><a href="swan_village.php"><?= SWAN_VILLAGE;?></a></td>
						</tr>
						<tr>
							<td><a href="forest.php"><?= FOREST;?></a></td>
					</tr>
					</tbody>
					</table>
			</div>
				</div>
</div>
			<script>
	 function initMap() {
		 var uluru = {lat: 41.704658, lng: 25.246796};
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
<script>
$(document).ready(function() {
  $.simpleWeather({
    location: '',
    woeid: '837573',
    unit: 'c',
    success: function(weather) {
      html = '<h2><i class="icon-'+weather.code+'"></i> '+weather.temp+'&deg;'+weather.units.temp+'</h2>';
      html += '<ul><li>'+weather.city+', '+weather.region+'</li>';
      html += '<li class="currently">'+weather.currently+'</li>';
      html += '<li>'+weather.wind.direction+' '+weather.wind.speed+' '+weather.units.speed+'</li></ul>';

      $("#weather").html(html);
    },
    error: function(error) {
      $("#weather").html('<p>'+error+'</p>');
    }
  });
});

</script>


				<?php require 'includes/footer.php'?>
