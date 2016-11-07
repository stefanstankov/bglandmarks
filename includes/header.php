<?php
//* TODO remove debug infoo after deployment */
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!doctype html>
<html lang="bg">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" sizes="76x76" href="/assets/img/logo.png">
	<link rel="icon" type="image/png" href="/assets/img/logo.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php echo $pageTitle; ?> - Bulgarian Landmarks</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<!-- CSS Files -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets/css/material-kit.css" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="/assets/css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link href="/assets/css/gallery.css" rel="stylesheet" />
</head>

<body class="index-page">
	<nav class="navbar navbar-default navbar-fixed-top second-nav">
		<div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
						<a class="navbar-brand" href="http://www.bglandmarks.com"><i aria-hidden="true" class="fa fa-home"></i>Bulgarian landmarks</a>
	    </div>
	    <div id="navbar" class="navbar-collapse collapse navbar-right">
	        <ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#">Забележителности<b class="caret"></b>
													</a>
										<ul id="menu-center" class="dropdown-menu">
											<li><a href="#"><span class="glyphicon glyphicon-tower " aria-hidden="true"></span>Исторически</a></li>
											<li><a href="#"><i class="fa fa-tree" aria-hidden="true"></i>Природни
									</a></li>
											<li><a href="#"><i class="fa fa-university" aria-hidden="true"></i>Архитектурни</a></li>
										</ul>
									</li>
				<li><a href="#">WHAT</a></li>
				<li><a href="#">Галерия</a></li>
	        </ul>
	    </div>
	    <!--/.nav-collapse -->
	  </div>
	</nav>
<nav id="nav-color" class="navbar navbar-default navbar-fixed-top first-nav">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
					<a href="#" data-toggle="modal" data-target="#aboutus">
						<i id="info" class="material-icons">info_outline</i> За нас
					</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse navbar-right">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a rel="tooltip" title="Харесайте ни във Facebook" data-placement="bottom" href="https://www.facebook.com/" target="_blank" class="btn btn-white btn-simple btn-just-icon">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li>
            <a rel="tooltip" title="Последвайте ни в Instagram" data-placement="bottom" href="https://www.instagram.com/bglandmarks" target="_blank" class="btn btn-white btn-simple btn-just-icon">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
          <li>
            <a rel="tooltip" title="+359 899 001 504" data-toggle="tooltip" data-placement="bottom" href="#" class="btn btn-white btn-simple btn-just-icon">
              <i class="fa fa-mobile" aria-hidden="true"></i>
            </a>
          </li>
          <li>
            <a rel="tooltip" title="bglandmarks@gmail.com" data-toggle="tooltip" data-placement="bottom" href="#" class="btn btn-white btn-simple btn-just-icon">
              <i class="fa fa-envelope-o" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
    </div>
    <!--/.nav-collapse -->
  </div>
</nav>
