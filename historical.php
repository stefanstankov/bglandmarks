<?php
  	$pageTitle = 'Начало';
?>
   	<?php	require 'includes/header.php';?>
    <div class="view">
    <div class="animated fadeInUp text-center flex-center">
      <div class="container">
        <div class="panel panel-default panel-article">
          <div class="panel-heading">
    <h1><span class="text-color1"><?= HISTORICAL;?></span><span class="pull-right"><a class="text-color1" href="javascript:history.go(-1)"><i class="fa fa-times" aria-hidden="true"></i></a></span></h1>
      </div>
<div class="panel-body row">
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
  	<div class="zodiac-box">
  	  <a class="nounderline" href="perperikon.php">
  		 <div class="box-icon">
  			 <span class="glyphicon glyphicon-tower custom-glyphicon box-icon-a"></span>
  		 </div>
       <br>
  		<div class="info">
  			<img src="assets/img/perperikon.jpg" class="img-responsive" alt="<?= PERPERIKON;?>">
        <br>
  			<a class="btn btn-block box-icon-h btn-round" href="perperikon.php"><?= PERPERIKON;?> </a>
  		</div>
      </a>
  	 </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
    <div class="zodiac-box">
      <a class="nounderline" href="ustra.php">
       <div class="box-icon">
         <span class="glyphicon glyphicon-tower custom-glyphicon box-icon-a"></span>
       </div>
       <br>
      <div class="info">
        <img src="assets/img/ustra.jpg" class="img-responsive" alt="<?= USTRA;?>">
        <br>
        <a class="btn btn-block box-icon-h btn-round" href="ustra.php"><i class="fa fa-arrow-right" aria-hidden="true"></i><?= USTRA;?> </a>
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
