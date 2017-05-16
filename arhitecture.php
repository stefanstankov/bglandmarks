<?php
  	$pageTitle = 'Начало';
?>
<?php	require 'includes/header.php';?>
  <div class="view panell panel1">
		<div class="animated fadeInUp text-center flex-center">
      <div class="container">
        <div class="panel panel-default panel-article">
          <div class="panel-heading">
      <h1><span class="text-color1"><?= ARCHITECTURAL;?></span><span class="pull-right"><a class="text-color1" href="javascript:history.go(-1)"><i class="fa fa-times" aria-hidden="true"></i></a></span></h1>
            </div>
        <div class="panel-body row">
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          	<div class="zodiac-box">
          	  <a class="nounderline" href="museum.php">
          		 <div class="box-icon">
          			 <span class="fa fa-university custom-glyphicon box-icon-a"></span>
          		 </div>
               <br>
          		<div class="info">
          			<img src="assets/img/museum.jpg" class="img-responsive" alt="<?= MUSEUM;?>">
                <br>
          			<a class="btn btn-block box-icon-h btn-round" href="museum.php"><i class="fa fa-arrow-right" aria-hidden="true"></i><?= MUSEUM;?> </a>
          		</div>
              </a>
          	 </div>
          </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
      	<div class="zodiac-box">
      	  <a class="nounderline" href="statue.php">
      		 <div class="box-icon">
      			 <span class="fa fa-university custom-glyphicon box-icon-a"></span>
      		 </div>
           <br>
      		<div class="info">
      			<img src="assets/img/orfei.jpg" class="img-responsive" alt="<?= STATUE;?>">
            <br>
      			<a class="btn btn-block box-icon-h btn-round" href="statue.php"><i class="fa fa-arrow-right" aria-hidden="true"></i><?= STATUE;?> </a>
      		</div>
          </a>
      	 </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
    	<div class="zodiac-box">
    	  <a class="nounderline" href="devil_bridge.php">
    		 <div class="box-icon">
    			 <span class="fa fa-university custom-glyphicon box-icon-a"></span>
    		 </div>
         <br>
    		<div class="info">
    			<img src="assets/img/bridge.jpg" class="img-responsive" alt="<?= BRIDGE;?>">
          <br>
    			<a class="btn btn-block box-icon-h btn-round" href="devil_bridge.php"><i class="fa fa-arrow-right" aria-hidden="true"></i><?= BRIDGE;?> </a>
    		</div>
        </a>
    	 </div>
    </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
      	<div class="zodiac-box">
      	  <a class="nounderline" href="dam_wall.php">
      		 <div class="box-icon">
      			 <span class="fa fa-university custom-glyphicon box-icon-a"></span>
      		 </div>
           <br>
      		<div class="info">
      			<img src="assets/img/dam_wall.jpg" class="img-responsive" alt="<?= Kardzhali_Dam;?>">
            <br>
      			<a class="btn btn-block box-icon-h btn-round" href="dam_wall.php"><i class="fa fa-arrow-right" aria-hidden="true"></i><?= Kardzhali_Dam;?> </a>
      		</div>
          </a>
      	 </div>
      </div>
    </div>
</div>
</div>
</div>
</div>
      <?php require 'includes/footer.php' ?>
