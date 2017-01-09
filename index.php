<?php
  	$pageTitle = 'Начало';

 		require 'includes/header.php';
?>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      	<div class="section section-basic text-center article-color container">
          <div class="row">
               <div class="col-md-12 custom_jumbo">
          <div class="jumbotron">
        <h1><?= WELCOME;?></h1>
        <?= ABOUT_BG;?>
      </div>
      </div>
      </div>
          <div class="row">
            <div class="col-md-6">
              <h2><?= RANDOM_PICS;?></h2>
            <div class="flexslider">
              <ul class="slides">
                <li>
                  <img src="/assets/img/main.JPG"/>
                </li>
                <li>
                  <img src="/assets/img/main1.jpg"/>
                </li>
                <li>
                  <img src="/assets/img/main4.jpg"/>
                </li>
                <li>
                  <img src="/assets/img/main3.jpg"/>
                </li>
                <li>
                  <img src="/assets/img/bridge.jpg"/>
                </li>
                <li>
                  <img src="/assets/img/eagle_rocks.jpg"/>
                </li>
                <li>
                  <img src="/assets/img/dam_wall.jpg"/>
                </li>
                <li>
                  <img src="/assets/img/museum.jpg"/>
                </li>
                <li>
                  <img src="/assets/img/perperikon.jpg"/>
                </li>
                <li>
                  <img src="/assets/img/orfei.jpg"/>
                </li>
                <li>
                  <img src="/assets/img/utroba_cave.jpg"/>
                </li>
              </ul>
            </div>
            </div>
            <div class="col-md-6">
              <h2><?= LOCATION;?></h2>
                <div id="map"></div>
            </div>
                </div>
                <hr/>
                  <h2><?= EDITORS_CHOISE;?></h2>
                  <hr/>
          <div class="row">
           <div class="col-md-4 ">
             <a class="link_color" href="utroba_cave.php">
             <div class="card">
           <img src="assets/img/utroba_cave.jpg" class="img-responsive" alt=">Пещера утробата">
           <div class="card-block">
             <h3 class="card-title"><strong><?= UTROBA;?></strong></h3>
             <p class="text-center"><a href="utroba_cave.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
             </div>
           </div>
         </a>
          </div>
           <div class="col-md-4">
             <a class="link_color" href="dam_wall.php">
             <div class="card">
                 <img src="assets/img/dam_wall.jpg" class="img-responsive" alt="язовирната стена Кърджали" >
                 <div class="card-block">
                   <h3 class="card-title"><strong><?= Kardzhali_Dam;?></strong></h3>
                   <p class="text-center"><a href="dam_wall.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
                 </div>
                   </div>
                   </a>
          </div>
           <div class="col-md-4">
             <a  class="link_color" href="ustra.php">
               <div class="card">
               <img src="assets/img/ustra.jpg" class="img-responsive" alt="Крепостта Устра">
               <div class="card-block">
                 <h3 class="card-title"><strong><?= USTRA;?></strong></h3>
                 <p class="text-center"><a href="ustra.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
               </div>
                 </div>
                 </a>
           </div>
         </div>
</div>
       </div>
       <script>
    function initMap() {
      var uluru = {lat: 42.697626, lng: 23.322284};
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

            	<?php require 'includes/footer.php' ?>
