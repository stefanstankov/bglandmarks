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

					<h2><span class="text-color"><?= STATUE;?></span></h2>

					<div class="col-md-12">
	<div id="map"></div>
</div>
            <div class="row">
					<div class="col-md-9">
						<div class="panel">
							<div class="panel-heading alert-danger"><h3><?=MORE_INFO;?></h3></div>
 								<p><?= STATUE_ARTICLE;?></p></a>
	</div>
          </div>
					<div class="col-md-3">
						<h2><span class="text-color"><?= FROM_CATEGORY;?></span></h2>
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
							<table class="table">
								<thead>
									<tr>
										<th><span class="text-color"><?= LINKS;?></span></th>
									</tr>
								</thead>
								<tbody class="text-left">
									<tr>
										<td><a href="https://www.youtube.com/embed/dn9alP8-bMU"><i class="fa fa-youtube" aria-hidden="true"></i><?= STATUE;?></a></td>
									</tr>
								</tbody>
								</table>
					</div>
					</div>
					<p class="text-left">
<a class="fancybox" href="/assets/img/orfei.jpg" data-fancybox-group="gallery" title="<?= STATUE;?>"><img src="/assets/img/thumbs/orfei.jpg" alt="" /></a>
<a class="fancybox" href="/assets/img/statue1.jpg" data-fancybox-group="gallery" title="<?= STATUE;?>"><img src="/assets/img/thumbs/statue1.jpg" alt="" /></a>
<a class="fancybox" href="/assets/img/statue2.jpg" data-fancybox-group="gallery" title="<?= STATUE;?>"><img src="/assets/img/thumbs/statue2.jpg" alt="" /></a>
</p>
<div class="row">
<div class="col-md-12">
<div class="fb-comments pull-left" data-href="http://www.bglandmarks.com/statue.php" data-numposts="5"></div>
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
