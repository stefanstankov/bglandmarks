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
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        <i class="material-icons">clear</i>
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
<div class="modal fade" id="admin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content log-modal">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
      </button>
        <h4 class="modal-title"><span class="admin-modal"><?= ADMIN;?></span></h4>
      </div>
      <div class="modal-body text-center">
        <p>
          <i class="fa fa-user-o custom-glyphicon1" aria-hidden="true"><span class="cred">Username</span></i><input type="text" class="form-input">
        </p>
        <p>
          <i class="fa fa-lock custom-glyphicon1" aria-hidden="true"><span class="cred1">Password</span></i><input type="password"class="form-input">
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-simple btn-simple-custom" data-dismiss="modal"><?= LOGIN;?><i class="fa fa-paw" aria-hidden="true"></i>

        </button>
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
 <script src="/assets/js/pushy.min.js"></script>
 <script src="/assets/js/libs/jquery.min.js"></script>
<script src="/assets/js/jquery.flexslider-min.js"></script>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="/assets/js/ie-emulation-modes-warning.js"></script>
<script src="/assets/js/"></script>
<script type="text/javascript" charset="UTF-8" src="landmarks.json">

<div id="fb-root"></div>
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
    $(".btn").html('<span class="glyphicon glyphicon-collapse-down"></span> Read more');
  });
  $("#demo").on("show.bs.collapse", function(){
    $(".btn").html('<span class="glyphicon glyphicon-collapse-up"></span> Read less');
  });

  $('input#searchBar').keyup(function () {

    if($('input#searchBar').val() != ''){
              setTimeout(function(){var rrr = '';var str = $('input#searchBar').val();for(var i = 0; i < landmarks.length; i++){if(landmarks[i].landmark.title == str){console.log(landmarks[i].landmark.link);}}alert(rrr);}, 3000);
}
          });
});
</script>

</html>
