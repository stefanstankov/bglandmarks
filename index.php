<?php
  	$pageTitle = 'Начало';

 		require 'includes/header.php';
?>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      	<div class="section section-basic text-center article-color1 article-color container">
          <div class="jumbotron container-fluid">
        <h1><?= WELCOME;?></h1>
        <?= ABOUT_BG;?>
      </div>
          <h2><?= EDITORS_CHOISE;?></h2>
          <hr/>
          <div class="row">
            <div class="container">
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
                </div>
          <div class="row">
           <div class="col-md-4 ">
             <a class="link_color" href="utroba_cave.php">
             <div class="card">
           <img src="assets/img/utroba_cave.jpg" class="card-img-top" alt=">Пещера утробата" width="318" height="180">
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
                 <img src="assets/img/dam_wall.jpg" class="card-img-top" alt="язовирната стена Кърджали" width="318" height="180">
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
               <img src="assets/img/ustra.jpg" class="card-img-top" alt="Крепостта Устра" width="318" height="180">
               <div class="card-block">
                 <h3 class="card-title"><strong><?= USTRA;?></strong></h3>
                 <p class="text-center"><a href="ustra.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
               </div>
                 </div>
                 </a>
           </div>
         </div>
       </div>
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
