<?php
  	$pageTitle = 'Начало';
 		require 'includes/header.php';
?>
  <div class="section section-basic text-center article-color container">
    <a class="fancybox-thumb" rel="fancybox-thumb" href="/assets/img/bridge.jpg" title="Golden Manarola (Sanjeev Deo)">
    	<img src="/assets/thumbs/img/bridge.jpg" alt="" />
    </a>
    <a class="fancybox-thumb" rel="fancybox-thumb" href="/assets/img/bridge1.jpg" title="Codirosso spazzacamino (Massimo Greco _Foligno)">
    	<img src="/assets/thumbs/img/bridge1.jpg" alt="" />
    </a>
    <a class="fancybox-thumb" rel="fancybox-thumb" href="/assets/img/eagle_rocks.jpg" title="Morning Twilight (Jose Hamra Images)">
    	<img src="/assets/thumbs/img/eagle_rocks.jpg" alt="" />
    </a>
    <a class="fancybox-thumb" rel="fancybox-thumb" href="/assets/img/eagle_rocks1.jpg" title="(Eric Goncalves (cathing up again!))">
    	<img src="/assets/thumbs/img/eagle_rocks1.jpg" alt="" />
    </a>
    <a class="fancybox-thumb" rel="fancybox-thumb" href="/assets/img/eagle_rocks2.jpg" title="(Eric Goncalves (cathing up again!))">
    	<img src="/assets/thumbs/img/eagle_rocks2.jpg" alt="" />
    </a>
  </div>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
<script>
$(document).ready(function() {
	$(".fancybox-thumb").fancybox({
		prevEffect	: 'none',
		nextEffect	: 'none',
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
});
</script>
	<?php require 'includes/footer.php' ?>
