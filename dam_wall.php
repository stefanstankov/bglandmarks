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

					<h2><span class="text-color"><?= Kardzhali_Dam;?></span></h2>


            <div class="row">
					<div class="col-md-10">
						<div class="panel">
							<div class="panel-heading alert-danger"><h3><?=MORE_INFO;?></h3></div>
 								<p><?= DAM_ARTICLE;?></p></a>
	</div>
          </div>
					<div class="col-md-2">
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
									<td><a href="statue.php"><?= STATUE;?></a></td>
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
										<td><a href="https://bg.wikipedia.org/wiki/%D0%9A%D1%8A%D1%80%D0%B4%D0%B6%D0%B0%D0%BB%D0%B8_(%D1%8F%D0%B7%D0%BE%D0%B2%D0%B8%D1%80)"><i class="fa fa-wikipedia-w" aria-hidden="true"></i>Кърджали (язовир)</a></td>
									</tr>
										<tr>
										<td><a href="https://en.wikipedia.org/wiki/Kardzhali_Reservoir"><i class="fa fa-wikipedia-w" aria-hidden="true"></i>Kardzhali Reservoir</a></td>
									</tr>
									<tr>
										<td><a href="http://socbg.com/2015/04/%D1%8F%D0%B7%D0%BE%D0%B2%D0%B8%D1%80-%D0%BA%D1%8A%D1%80%D0%B4%D0%B6%D0%B0%D0%BB%D0%B8-%D0%BD%D0%B0%D0%B9-%D0%B3%D0%BE%D0%BB%D1%8F%D0%BC%D0%B0%D1%82%D0%B0-%D0%B2%D0%BE%D0%B4.html">История на язовирната стена</a></td>
								</tr>
								</tbody>
								</table>
					</div>
					</div>
					<p class="text-left">
<a class="fancybox" href="/assets/img/dam_wall.jpg" data-fancybox-group="gallery" title="<?= BRIDGE;?>"><img src="/assets/img/thumbs/dam_wall.jpg" alt="" /></a>
<a class="fancybox" href="/assets/img/dam_wall1.jpg" data-fancybox-group="gallery" title="<?= BRIDGE;?>"><img src="/assets/img/thumbs/dam_wall1.jpg" alt="" /></a>
<a class="fancybox" href="/assets/img/dam_wall2.jpg" data-fancybox-group="gallery" title="<?= BRIDGE;?>"><img src="/assets/img/thumbs/dam_wall2.jpg" alt="" /></a>
</p>
<div class="row">
<div class="col-md-12">
<div class="fb-comments" data-href="http://www.bglandmarks.com/dam_wall.php" data-numposts="5"></div>
<div class="fb-share-button pull-left" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>
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
