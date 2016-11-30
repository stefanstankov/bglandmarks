<?php
  	$pageTitle = 'Начало';
 		require 'includes/header.php';
?>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <div class="section section-basic text-center article-color container">
    <a class="fancybox-thumb" rel="fancybox-thumb" href="/asets/img/bridge.jpg" title="Golden Manarola (Sanjeev Deo)">
    	<img src="/asets/thumbs/img/bridge.jpg" alt="" />
    </a>
    <a class="fancybox-thumb" rel="fancybox-thumb" href="/asets/img/bridge1.jpg" title="Codirosso spazzacamino (Massimo Greco _Foligno)">
    	<img src="/asets/thumbs/img/bridge1.jpg" alt="" />
    </a>
    <a class="fancybox-thumb" rel="fancybox-thumb" href="/asets/img/eagle_rocks.jpg" title="Morning Twilight (Jose Hamra Images)">
    	<img src="/asets/thumbs/img/eagle_rocks.jpg" alt="" />
    </a>
    <a class="fancybox-thumb" rel="fancybox-thumb" href="/asets/img/eagle_rocks1.jpg" title="(Eric Goncalves (cathing up again!))">
    	<img src="/asets/thumbs/img/eagle_rocks1.jpg" alt="" />
    </a>
    <a class="fancybox-thumb" rel="fancybox-thumb" href="/asets/img/eagle_rocks2.jpg" title="(Eric Goncalves (cathing up again!))">
    	<img src="/asets/thumbs/img/eagle_rocks2.jpg" alt="" />
    </a>
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
