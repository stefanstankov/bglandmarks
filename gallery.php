<?php
  	$pageTitle = 'Начало';
 		require 'includes/header.php';
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <div class="section section-basic text-center article-color container">
<div id="galleryTab">
  <a data-rel="all"  href="javascript:;" class="filter active">View all</a>
  <a data-rel="anim" href="javascript:;" class="filter">Animals</a>
  <a data-rel="land" href="javascript:;" class="filter">Landscapes</a>
  <a data-rel="arch" href="javascript:;" class="filter">Architecture</a>
</div>

<div class="galleryWrap">
  <a class="fancybox" data-fancybox-group="gallery" data-filter="anim" href="/assets/image/bridge.jpg"><img src="/img/thumbs/bridge.jpg" alt="" /></a>
  <a class="fancybox" data-fancybox-group="gallery" data-filter="anim" href="/assets/image/bridge1.jpg"><img src="/img/thumbs/bridge1.jpg" alt="" /></a>
  <a class="fancybox" data-fancybox-group="gallery" data-filter="land" href="/assets/image/eagle_rocks.jpg"><img src="/assets/image/eagle_rocks.jpg" alt="" /></a>
  <a class="fancybox" data-fancybox-group="gallery" data-filter="land" href="/assets/image/eagle_rocks1.jpg"><img src="/assets/image/eagle_rocks1.jpg" alt="" /></a>
  <a class="fancybox" data-fancybox-group="gallery" data-filter="arch" href="/assets/image/eagle_rocks2.jpg"><img src="/assets/image/eagle_rocks2.jpg" alt="" /></a>
</div>
</div>
<script>
jQuery(function($){
    // fancybox
    $(".fancybox").fancybox({
        modal: true, // disable regular nav and close buttons
        // add buttons helper (requires buttons helper js and css files)
        helpers: {
            buttons: {}
        }
    });
}); // ready
</script>
<script>
jQuery(function ($) {
    // fancybox
    $(".fancybox").fancybox({
        modal: true, // disable regular nav and close buttons
        // add buttons helper (requires buttons helper js and css files)
        helpers: {
            buttons: {}
        }
    });
    // filter selector
    $(".filter").on("click", function () {
        var $this = $(this);
        // if we click the active tab, do nothing
        if ( !$this.hasClass("active") ) {
            $(".filter").removeClass("active");
            $this.addClass("active"); // set the active tab
            // get the data-rel value from selected tab and set as filter
            var $filter = $this.data("rel");
            // if we select view all, return to initial settings and show all
            $filter == 'all' ?
                $(".fancybox")
                .attr("data-fancybox-group", "gallery")
                .not(":visible")
                .fadeIn()
            : // otherwise
                $(".fancybox")
                .fadeOut(0)
                .filter(function () {
                    // set data-filter value as the data-rel value of selected tab
                    return $(this).data("filter") == $filter;
                })
                // set data-fancybox-group and show filtered elements
                .attr("data-fancybox-group", $filter)
                .fadeIn(1000);
        } // if
    }); // on
}); //
</script>
	<?php require 'includes/footer.php' ?>
