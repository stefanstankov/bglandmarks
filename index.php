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

            <h1 class="custom-div"><?= WELCOME;?></h1>
            <a href="#" type="button" class="btn btn-custom" data-toggle="collapse" data-target="#demo">
          <span class="glyphicon glyphicon-info-sign"></span>
     </a>
        <div id="demo" class="collapse">
        <?= ABOUT_BG;?>
        </div>
      </div>
      </div>
      </div>
          <div class="row">
            <div class="col-md-6">
              <h2><?= RANDOM_PICS;?></h2>
              <div id="custom_video" class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/obr8jGZhAEU"></iframe>
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
           <div class="col-md-3">
             <a class="link_color" href="utroba_cave.php">
                    <div class="card">
                  <img src="assets/img/utroba_cave.jpg" class="img-responsive" alt=">Пещера утробата">
                  </div>
                  <div class="card-block">
                    <h3 class="card-title"><strong><?= UTROBA;?></strong></h3>
                    <p class="text-center"><a href="utroba_cave.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
                    </div>
                </a>
          </div>
           <div class="col-md-3">
             <a class="link_color" href="dam_wall.php">
             <div class="card">
                 <img src="assets/img/dam_wall.jpg" class="img-responsive" alt="язовирната стена Кърджали" >
                   </div>
                   <div class="card-block">
                     <h3 class="card-title"><strong><?= Kardzhali_Dam;?></strong></h3>
                     <p class="text-center"><a href="dam_wall.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
                   </div>
                   </a>
          </div>
           <div class="col-md-3">
             <a  class="link_color" href="ustra.php">
               <div class="card">
               <img src="assets/img/ustra.jpg" class="img-responsive" alt="Крепостта Устра">
                 </div>
                 <div class="card-block">
                   <h3 class="card-title"><strong><?= USTRA;?></strong></h3>
                   <p class="text-center"><a href="ustra.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
                 </div>
                 </a>
           </div>
           <div class="col-md-3">
             <a  class="link_color" href="stone_mushrooms.php">
               <div class="card">
               <img src="assets/img/stone_mushrooms.jpg" class="img-responsive" alt="Каменните гъби">
                 </div>
                 <div class="card-block">
                   <h3 class="card-title"><strong><?= STONE;?></strong></h3>
                   <p class="text-center"><a href="stone_mushrooms.php" class="btn btn-primary" role="button"><?= READ_MORE;?></a></p>
                 </div>
                 </a>
           </div>
         </div>
         <hr/>
           <h2><?= INSTA;?></h2>
           <hr/>
         <div class="row">
               <div class="col-md-3">
                 <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BQAgGMRj1JQ/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Rila Mountain</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Снимка, публикувана от Stefan Stankov (@bglandmarks) на <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-02-02T11:39:01+00:00">%месец %-ден %година в %-часа:%минути%сутрин/вечер ST</time></p></div></blockquote>
 <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
                  </div>
                     <div class="col-md-3">
                       <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BP7ZtGrjh-b/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Rila Lakes</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Снимка, публикувана от Stefan Stankov (@bglandmarks) на <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-01-31T12:06:58+00:00">%месец %-ден %година в %-часа:%минути%сутрин/вечер ST</time></p></div></blockquote>
         <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
                        </div>
                        <div class="col-md-3">
                          <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BQAgPKHj9vb/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Pirin Lakes</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Снимка, публикувана от Stefan Stankov (@bglandmarks) на <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-02-02T11:40:14+00:00">%месец %-ден %година в %-часа:%минути%сутрин/вечер ST</time></p></div></blockquote>
      <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
                           </div>
                     <div class="col-md-3">
                       <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BP7ZyJsjpsg/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Melnik</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Снимка, публикувана от Stefan Stankov (@bglandmarks) на <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-01-31T12:07:39+00:00">%месец %-ден %година в %-часа:%минути%сутрин/вечер ST</time></p></div></blockquote>
            <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
                        </div>
            </div>
         <br>
         <br>
</div>
       <script>
    function initMap() {
      var uluru = {lat: 42.697626, lng: 23.322284};
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
