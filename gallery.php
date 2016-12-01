<?php
  	$pageTitle = 'Начало';
 		require 'includes/header.php';
?>
  <link rel="stylesheet" type="text/css" href="/assets/css/jquery.fancybox.css" media="screen" />

  <div class="section section-basic text-center article-color container">
  <p>
	   <a class="fancybox" href="/assets/img/bridge.jpg" data-fancybox-group="gallery" title=""><img src="/assets/img/thumbs/bridge.jpg" alt="" /></a>
	   <a class="fancybox" href="/assets/img/bridge1.jpg" data-fancybox-group="gallery" title=""><img src="/assets/img/thumbs/bridge1.jpg" alt="" /></a>
	  <a class="fancybox" href="/assets/img/eagle_rocks.jpg" data-fancybox-group="gallery" title=""><img src="/assets/img/thumbs/eagle_rocks.jpg" alt="" /></a>
    <a class="fancybox" href="/assets/img/eagle_rocks1.jpg" data-fancybox-group="gallery" title=""><img src="/assets/img/thumbs/eagle_rocks1.jpg" alt="" /></a>
    <a class="fancybox" href="/assets/img/eagle_rocks2.jpg" data-fancybox-group="gallery" title=""><img src="/assets/img/thumbs/eagle_rocks2.jpg" alt="" /></a>

  </p>
    </div>

	<?php require 'includes/footer.php' ?>

  <script type="text/javascript" src="/assets/js/jquery-1.10.1.min.js"></script>
  <script type="text/javascript" src="/assets/js/jquery.fancybox.js"></script>


  <script type="text/javascript">
  $(document).ready(function() {

    $('.fancybox').fancybox();

  });
</script>
