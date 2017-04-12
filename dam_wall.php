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

					<h2><?= Kardzhali_Dam;?></h2>
			      <hr/>
						<p>
 <a class="fancybox" href="/assets/img/dam_wall.jpg" data-fancybox-group="gallery" title="<?= BRIDGE;?>"><img src="/assets/img/dam_wall.jpg" alt="" /></a>
 <a class="fancybox" href="/assets/img/dam_wall1.jpg" data-fancybox-group="gallery" title="<?= BRIDGE;?>"><img src="/assets/img/dam_wall1.jpg" alt="" /></a>
 <a class="fancybox" href="/assets/img/dam_wall2.jpg" data-fancybox-group="gallery" title="<?= BRIDGE;?>"><img src="/assets/img/dam_wall2.jpg" alt="" /></a>
</p>
            <div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading alert-danger"><h3><?=MORE_INFO;?></h3></div>
 								<p><?= DAM_ARTICLE;?></p></a>
	</div>
          </div>
					</div>
					<div class="row">
						<div class="col-md-6">
						<div id="custom_video" class="embed-responsive embed-responsive-16by9">
	  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/z8al6m-BATg"></iframe>
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
			<ol class="breadcrumb">
		<li><strong><?= LINKS;?></strong></li>
		<li><a href="https://bg.wikipedia.org/wiki/%D0%9A%D1%8A%D1%80%D0%B4%D0%B6%D0%B0%D0%BB%D0%B8_(%D1%8F%D0%B7%D0%BE%D0%B2%D0%B8%D1%80)"><i class="fa fa-wikipedia-w" aria-hidden="true"></i>Кърджали (язовир)</a></li>
				<li> <a href="https://en.wikipedia.org/wiki/Kardzhali_Reservoir"><i class="fa fa-wikipedia-w" aria-hidden="true"></i>Kardzhali Reservoir</a></li>
				<li> <a href="http://socbg.com/2015/04/%D1%8F%D0%B7%D0%BE%D0%B2%D0%B8%D1%80-%D0%BA%D1%8A%D1%80%D0%B4%D0%B6%D0%B0%D0%BB%D0%B8-%D0%BD%D0%B0%D0%B9-%D0%B3%D0%BE%D0%BB%D1%8F%D0%BC%D0%B0%D1%82%D0%B0-%D0%B2%D0%BE%D0%B4.html">История на язовирната стена</a></li>
	</ol>
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
							<td><a href="statue.php"><?= STATUE;?></a></td>
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
		 var uluru = {lat: 41.660233, lng: 25.284915};
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

				<?php require 'includes/footer.php'?>
				<script type="text/javascript" src="/assets/js/jquery-1.10.1.min.js"></script>
				<script type="text/javascript" src="/assets/js/jquery.fancybox.js"></script>
				<script type="text/javascript">
				$(document).ready(function() {

				 $('.fancybox').fancybox();

				});
				</script>
