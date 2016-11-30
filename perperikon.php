<?php
//* TODO remove debug infoo after deployment */
error_reporting(E_ALL);
ini_set('display_errors', 1);

	$pageTitle = 'Начало';
?>
<?php require 'includes/header.php' ?>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

		<div class="section section-basic text-center article-color container">
				<div class="row">
					<h2>Перперикон</h2>
			      <hr/>
					<div class="col-md-6">

							<div class="flexslider">
							  <ul class="slides">
							    <li>
							    	<img src="/assets/img/perperikon.jpg"/>
							    </li>
							    <li>
							    	<img src="/assets/img/perperikon1.jpg"/>
							    </li>
							  </ul>
							</div>

					</div>
					<div class="col-md-6">
						<div id="map"></div>
				</div>
				</div>
            <div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading alert-danger"><h3>Допълнителна информация</h3></div>
 								<p>Открит е през 1965 година със задачата да проучва, съхранява и популяризира културно-историческото наследство в Източни Родопи. Основния му фонд включва над 27 000 експоната ( 40 000 до днес ) - вещи, снимки и документи, свързани с историята на
                Кърджалийския край. Експозицията е открита през 1987 година, разположена е на 1800 м2 и е разделена на три секции - отдел „Археология“, отдел „Етнография“ и отдел „Природа“. За всеки един от тях е отделен по един етаж.</p></a>
	</div>
          </div>
					</div>
						<div class="row">
					<div class="col-md-12">
					<div class="fb-comments" data-width="100%" data-numposts="5"></div>
					<ol class="breadcrumb">
				<li><strong>Линкове по темата</strong></li>
				<li><a href="https://bg.wikipedia.org/wiki/%D0%9F%D0%B5%D1%80%D0%BF%D0%B5%D1%80%D0%B8%D0%BA%D0%BE%D0%BD"><i class="fa fa-wikipedia-w" aria-hidden="true"></i>Перперикон</a></li>
				<li> <a href="https://www.google.com/maps/place/Perperikon/@41.7153451,25.4662332,3a,75y,59.27h,79.8t/data=!3m7!1e1!3m5!1s8wAuDEDxoB03g7UVc8O4Og!2e0!6s%2F%2Fgeo0.ggpht.com%2Fcbk%3Fcb_client%3Dmaps_sv.tactile%26output%3Dthumbnail%26thumb%3D2%26panoid%3D8wAuDEDxoB03g7UVc8O4Og%26w%3D223%26h%3D75%26yaw%3D92%26pitch%3D0%26thumbfov%3D120%26ll%3D41.715345,25.466233!7i13312!8i6656!4m5!3m4!1s0x14ad68a5a12cfa65:0xd014c8df7117f93a!8m2!3d41.7154279!4d25.4656735!6m1!1e1"><i class="fa fa-map-pin"></i></i>Перперикон</a></li>
			</ol>
				</div>
			</div>

			<script>
	 function initMap() {
		 var uluru = {lat: 41.620515, lng: 25.114197};
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


				<?php require 'includes/footer.php'?>
