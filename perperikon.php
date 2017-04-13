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

				<h2><span class="text-color"><?= PERPERIKON;?></span></h2>

				<div class="col-md-12">
<div id="map"></div>
</div>
					<div class="row">
				<div class="col-md-9">
					<div class="panel">
						<div class="panel-heading alert-danger"><h3><?=MORE_INFO;?></h3></div>
							<p><?= PERPERIKON_ARTICLE;?></p></a>
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
								<td><a href="ustra.php"><?= USTRA;?></a></td>
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
									<td><a href="https://bg.wikipedia.org/wiki/%D0%9F%D0%B5%D1%80%D0%BF%D0%B5%D1%80%D0%B8%D0%BA%D0%BE%D0%BD"><i class="fa fa-wikipedia-w" aria-hidden="true"></i>Перперикон</a></td>
								</tr>
									<tr>
									<td><a href="https://en.wikipedia.org/wiki/Perperikon"><i class="fa fa-wikipedia-w" aria-hidden="true"></i>Perperikon</a></td>
								</tr>
								<tr>
									<td><a href="https://www.google.com/maps/place/Perperikon/@41.7153451,25.4662332,3a,75y,59.27h,79.8t/data=!3m7!1e1!3m5!1s8wAuDEDxoB03g7UVc8O4Og!2e0!6s%2F%2Fgeo0.ggpht.com%2Fcbk%3Fcb_client%3Dmaps_sv.tactile%26output%3Dthumbnail%26thumb%3D2%26panoid%3D8wAuDEDxoB03g7UVc8O4Og%26w%3D223%26h%3D75%26yaw%3D92%26pitch%3D0%26thumbfov%3D120%26ll%3D41.715345,25.466233!7i13312!8i6656!4m5!3m4!1s0x14ad68a5a12cfa65:0xd014c8df7117f93a!8m2!3d41.7154279!4d25.4656735!6m1!1e1"><i class="fa fa-map-pin"></i></i>Перперикон</a></td>
								</tr>
								<tr>
									<td><a href="https://www.youtube.com/embed/9jn8lhrHcOQ"><i class="fa fa-youtube" aria-hidden="true"></i>Perperikon</a></td>
								</tr>
							</tbody>
							</table>
				</div>
				</div>
				<p class="text-left">
<a class="fancybox" href="/assets/img/perperikon.jpg" data-fancybox-group="gallery" title="<?= BRIDGE;?>"><img src="/assets/img/thumbs/perperikon.jpg" alt="" /></a>
<a class="fancybox" href="/assets/img/perperikon1.jpg" data-fancybox-group="gallery" title="<?= BRIDGE;?>"><img src="/assets/img/thumbs/perperikon1.jpg" alt="" /></a>
</p>
<div class="row">
<div class="col-md-12">
<div class="fb-comments pull-left" data-href="http://www.bglandmarks.com/perperikon.php" data-numposts="5"></div>
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
	 var uluru = {lat: 41.715404, lng: 25.465534};
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
