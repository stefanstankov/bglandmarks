<?php
  	$pageTitle = 'Начало';
 		require 'includes/header.php';
?>
  <div class="section section-basic text-center article-color container">
  <p>
	   <a class="fancybox" href="/assets/img/bridge.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="/assets/thumbs/img/bridge.jpg" alt="" /></a>
	   <a class="fancybox" href="/assets/img/bridge1.jpg" data-fancybox-group="gallery" title="Etiam quis mi eu elit temp"><img src="/assets/thumbs/img/bridge1.jpg" alt="" /></a>
	  <a class="fancybox" href="/assets/img/eagle_rocks.jpg" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="/assets/thumbs/img/eagle_rocks.jpg" alt="" /></a>
    <a class="fancybox" href="/assets/img/eagle_rocks1.jpg" data-fancybox-group="gallery" title="Sed vel sapien vel sem uno"><img src="/assets/thumbs/img/eagle_rocks1.jpg" alt="" /></a>
    <a class="fancybox" href="/assets/img/eagle_rocks2.jpg" data-fancybox-group="gallery" title="Sed vel sapien vel sem uno"><img src="/assets/thumbs/img/eagle_rocks2.jpg" alt="" /></a>
    </div>
  <script type="text/javascript">
  		$(document).ready(function() {

  			$('.fancybox').fancybox();

  		});
  	</script>
	<?php require 'includes/footer.php' ?>
