<?php
//* TODO remove debug infoo after deployment */
error_reporting(E_ALL);
ini_set('display_errors', 1);

	$pageTitle = 'Начало';
?>
<?php require 'includes/header.php' ?>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700">
<link rel="stylesheet" type="text/css" href="/assets/css/app.css" media="screen" />

<div class="container">
	<div class="panel panel-default panel-article">
		<div class="panel-heading">
				<h2><span class="text-color1"><?= BRIDGE;?></span><span class="pull-right"><a class="text-color1" href="javascript:history.go(-1)"><i class="fa fa-times" aria-hidden="true"></i></a></span></h2>
				</div>
				<div class="panel-body row">
				<div class="col-md-12">
<div id="map"></div>
</div>
				<div class="col-md-9">
					<div class="panel">
						<div class="panel-heading alert-danger"><h3 class="text-color1"><?=MORE_INFO;?></h3></div>
							<p><?= BRIDGE_ARTICLE;?></p></a>
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
								<td><a href="museum.php"><?= MUSEUM;?></a></td>
							</tr>
								<tr>
								<td><a href="statue.php"><?= STATUE;?></a></td>
							</tr>
							<tr>
								<td><a href="dam_wall.php"><?= Kardzhali_Dam;?></a></td>
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
									<td><a href="https://bg.wikipedia.org/wiki/%D0%94%D1%8F%D0%B2%D0%BE%D0%BB%D1%81%D0%BA%D0%B8_%D0%BC%D0%BE%D1%81%D1%82_(%D0%9E%D0%B1%D1%89%D0%B8%D0%BD%D0%B0_%D0%90%D1%80%D0%B4%D0%B8%D0%BD%D0%BE)"><i class="fa fa-wikipedia-w" aria-hidden="true"></i><?= BRIDGE;?></a></td>
								</tr>
									<tr>
									<td><a href="https://en.wikipedia.org/wiki/Dyavolski_most"><i class="fa fa-wikipedia-w" aria-hidden="true"></i><?= BRIDGE;?></a></td>
								</tr>
							</tbody>
							</table>
				</div>
						<div class="col-md-12">
				<p class="text-left">
<a class="fancybox" href="/assets/img/bridge.jpg" data-fancybox-group="gallery" title="<?= BRIDGE;?>"><img src="/assets/img/thumbs/bridge.jpg" alt="" /></a>
<a class="fancybox" href="/assets/img/bridge1.jpg" data-fancybox-group="gallery" title="<?= BRIDGE;?>"><img src="/assets/img/thumbs/bridge1.jpg" alt="" /></a>
<a class="fancybox" href="/assets/img/db.jpg.jpg" data-fancybox-group="gallery" title="<?= BRIDGE;?>"><img src="/assets/img/thumbs/db.jpg.jpg" alt="" /></a>
</p>
</div>
</div>
<div class="panel-footer">
	<div class="fb-comments" data-width="100%" data-href="http://www.bglandmarks.com/devil_bridge.php" data-numposts="5"></div>
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
	 var uluru = {lat: 41.620515, lng: 25.114197};
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
