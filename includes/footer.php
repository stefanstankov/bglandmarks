<footer class="footer">
  <div class="container">
    <div class="copyright">
      &copy; 2016, Copyright Stefan Stankov Stankov
    </div>
  </div>
</footer>
<!-- Sart Modal -->
<div class="modal fade" id="aboutus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        <i class="material-icons">clear</i>
      </button>
        <h4 class="modal-title">За нас</h4>
      </div>
      <div class="modal-body">
        <p>
          Сайта е в процес на разработка. Моля всеки, който иска да помогне да ни изпрати снимки на забележителностите от района, в който живее. Благодаря Ви!
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--  End Modal -->
</div>


</body>
<!--   Core JS Files   -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="/assets/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="/assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="/assets/js/material-kit.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="../assets/js/lightslider.js"></script>
 <script src="../assets/js/pushy.min.js"></script>
<div id="fb-root"></div>
<script>
$('.photoset-grid-basic').photosetGrid();
</script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript">
$().ready(function() {
  // the body of this function is in assets/material-kit.js
  materialKit.initSliders();
  window_width = $(window).width();

  if (window_width >= 992) {
    big_image = $('.wrapper > .header');

    $(window).on('scroll', materialKitDemo.checkScrollForParallax);
  }

}); </script>
</html>
