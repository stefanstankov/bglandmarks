<?php
//* TODO remove debug infoo after deployment */
error_reporting(E_ALL);
ini_set('display_errors', 1);

	$pageTitle = 'Начало';
?>
<?php require 'includes/header.php' ?>
	<!-- End Navbar -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" type="text/css" href="/assets/css/app.css" media="screen" />

		<div class="text-center container">

					<h2><span class="text-color"><?= MUSEUM;?></span></h2>

					<div class="col-md-12">
	<div id="map"></div>
</div>
            <div class="row">
					<div class="col-md-9">
						<div class="panel">
							<div class="panel-heading alert-danger"><h3><?=MORE_INFO;?></h3></div>
 								<p><?= MUSEUM_ARTICLE;?></p></a>
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
									<td><a href="statue.php"><?= STATUE;?></a></td>
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
										<td><a href="https://bg.wikipedia.org/wiki/%D0%A0%D0%B5%D0%B3%D0%B8%D0%BE%D0%BD%D0%B0%D0%BB%D0%B5%D0%BD_%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8_%D0%BC%D1%83%D0%B7%D0%B5%D0%B9,_%D0%9A%D1%8A%D1%80%D0%B4%D0%B6%D0%B0%D0%BB%D0%B8"><i class="fa fa-wikipedia-w" aria-hidden="true"></i>Регионален исторически музей Кърджали</a></td>
									</tr>
										<tr>
										<td><a href="http://www.kardjali.bg/en/?pid=6,12 ">Regional Museum of History, Kardzhali</a></li>
			<li> <a href="http://www.rim-kardzhali.bg/">Официален сайт</a></td>
									</tr>
								</tbody>
								</table>
					</div>
					</div>
					<p class="text-left">
<a class="fancybox" href="/assets/img/museum.jpg" data-fancybox-group="gallery" title="<?= BRIDGE;?>"><img src="/assets/img/thumbs/museum.jpg" alt="" /></a>
<a class="fancybox" href="/assets/img/museum1.jpg" data-fancybox-group="gallery" title="<?= BRIDGE;?>"><img src="/assets/img/thumbs/museum1.jpg" alt="" /></a>
</p>
<div class="row">
<div class="col-md-12">
<div class="fb-comments pull-left" data-href="http://www.bglandmarks.com/museum.php" data-numposts="5"></div>
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
		 var uluru = {lat: 41.647067, lng: 25.369539};
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
