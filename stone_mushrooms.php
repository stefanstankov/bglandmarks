<?php
//* TODO remove debug infoo after deployment */
error_reporting(E_ALL);
ini_set('display_errors', 1);

	$pageTitle = 'Начало';
?>
<?php require 'includes/header.php' ?>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700">
<link rel="stylesheet" type="text/css" href="/assets/css/app.css" media="screen" />

	<div class="text-center container">

				<h2><span class="text-color1"><?= STONE;?></span></h2>

				<div class="col-md-12">
<div id="map"></div>
</div>
					<div class="row">
				<div class="col-md-9">
					<div class="panel">
						<div class="panel-heading alert-danger"><h3 class="text-color1"><?=MORE_INFO;?></h3></div>
							<p><?= MUSHROOMS_ARTICLE;?></p></a>
</div>
				</div>
				<div class="col-md-3">
					<h2><span class="text-color1"><?= FROM_CATEGORY;?></span></h2>
					<table class="table">
						<thead>
							<tr>
								<th><?= LANDMARK_NAME;?></th>
							</tr>
						</thead>
						<tbody class="text-left">
							<tr>
								<td><a href="utroba_cave.php"><?= UTROBA;?></a></td>
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
						<table class="table">
							<thead>
								<tr>
									<th><span class="text-color1"><?= LINKS;?></span></th>
								</tr>
							</thead>
							<tbody class="text-left">
								<tr>
									<td><a href="https://bg.wikipedia.org/wiki/%D0%9A%D0%B0%D0%BC%D0%B5%D0%BD%D0%BD%D0%B8_%D0%B3%D1%8A%D0%B1%D0%B8_(%D0%91%D0%B5%D0%BB%D0%B8_%D0%BF%D0%BB%D0%B0%D1%81%D1%82)"><i class="fa fa-youtube" aria-hidden="true"></i><?= STONE;?></a></td>
								</tr>
								<tr>
									<td><a href="https://www.youtube.com/embed/JdUSBtjT_es"><i class="fa fa-youtube" aria-hidden="true"></i><?= STONE;?></a></td>
								</tr>
								<tr>
									<td><a href="https://en.wikipedia.org/wiki/The_Stone_Mushrooms"><i class="fa fa-wikipedia-w" aria-hidden="true"></i><?= STONE;?></a></td>
								</tr>
							</tbody>
							</table>
				</div>
				</div>
				<div class="row">
					<div class="col-md-12">
				<p class="text-left">
					<a class="fancybox" href="/assets/img/stone_mushrooms.jpg" data-fancybox-group="gallery" title="<?= BRIDGE;?>"><img src="/assets/img/thumbs/stone_mushrooms.jpg" alt="" /></a>
					<a class="fancybox" href="/assets/img/stone_mushrooms1.jpg" data-fancybox-group="gallery" title="<?= BRIDGE;?>"><img src="/assets/img/thumbs/stone_mushrooms1.jpg" alt="" /></a>
					<a class="fancybox" href="/assets/img/stone_mushrooms2.jpg" data-fancybox-group="gallery" title="<?= BRIDGE;?>"><img src="/assets/img/thumbs/stone_mushrooms2.jpg" alt="" /></a>
				</p>
			</div>
		</div>
<div class="row">
<div class="col-md-12">
	<div class="fb-comments" data-width="100%" data-href="http://www.bglandmarks.com/stone_mushrooms.php" data-numposts="5"></div>
</div>
<div class="col-md-12">
	<div class="fb-share-button pull-left" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>
</div>
</div>
</div>
</div>
<?php require 'includes/footer.php' ?>
<script type="text/javascript" src="/assets/js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.fancybox.js"></script>


<script type="text/javascript">
$(document).ready(function() {

$('.fancybox').fancybox();

});
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>
 function initMap() {
	 var uluru = {lat: 41.785845, lng: 25.432241};
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
