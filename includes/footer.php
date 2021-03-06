<footer class="footer footer-color clearfix">
<div class="container ">
  <div class="row">
    <div class="col-sm-6">
     <ul class="footer-ul-1 list-unstyled text-left list-inline ">
      <li><i class="fa fa-map-pin"></i><?= COUNTRY;?></li>
      <small class="text-muted white">|</small>
      <li><i class="fa fa-phone"></i> <?= PHONE;?>: +359 899 001 504</li>
      <small class="text-muted white">|</small>
      <li><i class="fa fa-envelope"></i><?= MAIL;?>: bglandmarks@gmail.com</li>
    </ul>
    </div>
    <div class="col-sm-6">
    <ul class="footer-ul-2 list-unstyled text-left list-inline pull-right">
      <li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/bglandmarks"><?= INSTAGRAM;?></a></li>
      <small class="text-muted white">|</small>
      <li>&copy; <strong class="co">Bulgarian Landmarks</strong></li>
      <small class="text-muted white">|</small>
      <li><a href="#"><span class="glyphicon glyphicon-circle-arrow-up"></span>Back to top</a></li>
    </ul>
    </div>
 </div>
</div>

    </footer>
<!-- Sart Modal -->
<div class="modal fade" id="aboutus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        <i class="material-icons">close</i>
      </button>
        <h4 class="modal-title"><span class="about-custom"><?= ABOUT_US;?></span></h4>
      </div>
      <div class="modal-body">
        <p>
          <span class="text-color1"><?= ABOUT_US_MESSAGE;?></span>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<form method="POST" action="admin.php">
<div class="modal fade" id="admin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content ">
<div class="modal-header log-modal text-center">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
<span class="pull-right"><i class="fa fa-times custom-glyphicon2" aria-hidden="true"></i></span>
</button>
<h4 class="modal-title"><span class="admin-modal"><?= ADMIN;?></span></h4>
</div>
<div class="modal-body">
<i class="fa fa-user-o custom-glyphicon1" aria-hidden="true"><span class="cred"><?=USERNAME;?></span></i>
<input type="text" placeholder="Enter Username" name="username" required>
<i class="fa fa-lock custom-glyphicon1" aria-hidden="true"><span class="cred1"><?= PASSWORD;?></span></i>
<input type="password" placeholder="Enter Password" name="password" required>
</div>
<div class="modal-footer">
<button type="submit" class="btn btn-simple btn-simple-custom"><?= LOGIN;?><i class="fa fa-paw" aria-hidden="true"></i>
</button>
</div>
</form>

<!--  End Modal -->
</div>
</div>
</div>
<div id="fb-root"></div>
</body>

<script src="/assets/bootstrap/dist/js/jquery.min.js"></script>
<script src="/assets/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/assets/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="/assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="/assets/js/material-kit.js" type="text/javascript"></script>
 <script src="/assets/js/pushy.min.js"></script>

<script src="/assets/js/jquery.flexslider-min.js"></script>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="/assets/js/ie-emulation-modes-warning.js"></script>
<script src="/assets/js/"></script>
<script type="text/javascript" charset="UTF-8" src="landmarks.json">


<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>


$("#menu-toggle").on("click", function(e){
  e.preventDefault();
  $("#wrapper").toggleClass("menuDisplayed");
});

</script>

<script>
$(document).ready(function(){
  $("#demo").on("hide.bs.collapse", function(){
      $(".custombtn").html('<?= QL;?>');
  });
  $("#demo").on("show.bs.collapse", function(){
    $(".custombtn").html('<?= QL;?>');
  });

  $('input#searchBar').keyup(function () {

    if($('input#searchBar').val() != ''){
              setTimeout(function(){var rrr = '';var str = $('input#searchBar').val();for(var i = 0; i < landmarks.length; i++){if(landmarks[i].landmark.title == str){console.log(landmarks[i].landmark.link);}}alert(rrr);}, 3000);
}
          });
});
</script>

</html>
