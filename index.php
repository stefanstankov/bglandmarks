<?php
  	$pageTitle = 'Начало';

 		require 'includes/header.php';
    include_once 'classes/dataBase.php';
    $db = dataBase::init();

      $lang = $_SESSION['language'];

    try {
      $query = "select value from settings where name='structureCreated'";
      $settings = $db->query($query);
      $row = $settings->fetch(PDO::FETCH_ASSOC);
      $settingsCreated = $row['value'];

    } catch(Exception $e) {
      $settingsCreated = "false";
      echo "Tables not created\n";
    }

    if($settingsCreated != "true") {
      echo "Initialising";
      $db->initDb();
      echo "Tables created";
    }


    try {
      $cats = array();
      $query = 'select * from categories where lang="'.$lang.'";';
      $categories = $db->query($query);
      $cats = $categories->fetchAll(PDO::FETCH_ASSOC);
    } catch(Exception $e) {
          exit($e);
    }



?>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<div class="container-fluid backgr">
<div class="animated fadeInUp container text-justify">
  <div class="row cdiv">
     <div class="col-md-12">
   <img src="/assets/img/snow1.JPG" class="img-responsive">
 </div>
  </div>
  <div class="container cw">
   <div class="row">
     <div class="col-md-12">
   <h1 sstyle="background-color:rgba(0,0,0,.3);" class="cw text-color1"><?= WELCOME;?></h1>
  </div>
  </div>
  </div>
    <div class="panel panel-default panel-article">
      <div class="custom-p-footer panel-body row">
<?=ABOUT_BG;?>
</div>
</div>
</div>

<div class="container">
<div class="row">


<?php foreach($cats as $cat) {

  try {
    $query = 'select * from landmarks where lang="'.$lang.'" and category="'.$cat['cat_id'].'";';
    $postsQuery = $db->query($query);
    $post = $postsQuery->fetch(PDO::FETCH_ASSOC);
  } catch(Exception $e) {
        exit($e);
  }

   ?>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
    <div class="zodiac-box">
      <a class="nounderline" href="/post.php?post=<?=$post["post_id"]; ?>">
       <div class="box-icon grow ">
         <span class="fa <?=$cat['icon'] ?> custom-glyphicon box-icon-a"></span>
       </div>
       <br>
      <div class="info">
        <?php $image = explode(",",$post['image']); ?>

        <img src="assets/img/<?=$image[0] ?>" class="img-responsive" alt="<?= ucwords($post['title']); ?>">
        <br>
        <a class="btn btn-block box-icon-h btn-round" href="/post.php?post=<?=$post["post_id"]; ?>"><i class="fa fa-arrow-right" aria-hidden="true"></i> <?= ucwords($post['title']); ?> </a>
      </div>
      </a>
     </div>
    </div>
<?php } ?>




  </div>
  </div>
<div class="animated fadeInUp container">
  <div class="panel panel-default panel-article">
    <div class="panel-heading">
              <h2 class="text-center text-color1"><?= INSTA;?></h2>
            </div>
          <div class="panel-body row">
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
               <div class="panel-footer">
               <div class="container abo">
                <h2 class="text-center text-color1">Where are these places ?</h2>
                <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <h4>Rila<br><span>Rila is a mountain range in southwestern Bulgaria and the highest mountain range of Bulgaria and the Balkans</span></h4>
                    </div>
                    <div class="item">
                      <h4>Rila lakes<br><span>The Seven Rila Lakes are situated in the northwestern Rila Mountains in Bulgaria.</span></h4>
                    </div>
                    <div class="item">
                      <h4>Pirin<br><span>The Pirin Mountains are a mountain range in southwestern Bulgaria, with Vihren the highest peak</span></h4>
                    </div>
                    <div class="item">
                      <h4>Melnik<br><span>Melnik is a town in Blagoevgrad Province, southwestern Bulgaria, in the southwestern Pirin Mountains</span></h4>
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              </div>
              </div>
              </div>
                      <div class="container text-center .cf-custom">
                    <!--  <div class="row">
                          <div class="col-md-12">
                            <h2 class="text-color2"><?= FROM_YOUTUBE;?></h2>
                            <div id="custom_video" class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/obr8jGZhAEU"></iframe>
                      </div>
                          </div>
                          </div> -->
                            <div class="row">
                          <div class="col-md-12">
                              <!--   <h2 class="text-color2"><?= LOCATION;?></h2> -->
                              <div id="map"></div>
                          </div>
                              </div>
                            </div>
 </div>
       <script>
    function initMap() {
      var uluru = {lat:42.697626, lng: 23.322284};
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
       		animation: "slide"
       	});
       });

       </script>
            	<?php require 'includes/footer.php' ?>
