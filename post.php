<?php
require 'includes/header.php';
include_once 'classes/dataBase.php';

$db = dataBase::init();

if(isset($_GET['post'])){
  $lang = $_SESSION['language'];
  $postId = $_GET['post'];
  $query = 'select * from landmarks where post_id='.$postId.' and lang="'.$lang.'";';
  $post = $db->query($query);
  $row = $post->fetch(PDO::FETCH_ASSOC);
  if(!$row) {
    http_response_code(404);
  }
} else {
  http_response_code(404);
}

$images = explode(",", $row['image']);

$pageTitle = $row['title'];
?>

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" type="text/css" href="/assets/css/app.css" media="screen" />

	<div class="container">
		<div class="panel panel-default panel-article panel1">
			<div class="panel-heading">
					<h2><span class="text-color1"><?= $row['title']?></span><span class="pull-right"><a class="text-color1" href="javascript:history.go(-1)"><i class="fa fa-times" aria-hidden="true"></i></a></span></h2>
				</div>
				<div class="panel-body row">
					<div class="col-md-12">
							<div id="map"></div>
					</div>
					<div class="col-md-9">
						<div class="panel">
							<div class="panel-heading alert-danger"><h3 class="text-color1"><?=MORE_INFO;?></h3></div>
 								<p><?= $row['body'] ?></p></a>
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
							<tbody class="text-left ">

                <?php
                  $lang = $_SESSION['language'];

                  $query = 'select * from landmarks where category='.$row['category'].' and lang="'.$lang.'" limit 3;';
                  $posts = $db->query($query);
                  $related = $posts->fetchAll(PDO::FETCH_ASSOC);
                  foreach($related as $rPost) {
                ?>
								<tr>
									<td><a class="text-color" href="/post.php?post=<?=$rPost['post_id']?>"><?= $rPost['title']; ?></a></td>
								</tr>
                <?php } ?>

							</tbody>
							</table>
					</div>

					<div class="col-md-12">

            <?php foreach($images as $img) {
                    echo  '<a class="fancybox" href="/assets/img/'.$img.'" data-fancybox-group="gallery" title="'.$row['title'].'"><img src="/assets/img/thumbs/'.$img.'" alt="" /></a>';
              } ?>
          </p>
          </div>
          </div>
<div class="panel-footer">
	<div class="fb-comments" data-width="100%" data-href="http://www.bglandmarks.com/eagle_rocks.php" data-numposts="5"></div>
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
		 var uluru = {lat: <?= $row['lat']?>, lng: <?= $row['lon']?>};
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
