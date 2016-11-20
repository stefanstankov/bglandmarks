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
 <link rel="stylesheet" href="assets/css/site.css" />
	<link rel="stylesheet" href="assets/css/pushy.css" />
	<link rel="stylesheet" href="assets/css/normalize.css" />
</head>

<body class="index-page">

	<div class="navbar-wrapper">
		 <div class="container">

			 <nav class="navbar navbar-inverse navbar-static-top">
				 <div class="container">
					 <div class="navbar-header">
						 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							 <span class="sr-only">Toggle navigation</span>
							 <span class="icon-bar"></span>
							 <span class="icon-bar"></span>
							 <span class="icon-bar"></span>
						 </button>
						 <a class="navbar-brand" href="#">Bulgarian landmarks</a>
					 </div>
					 <div id="navbar" class="navbar-collapse collapse">
						 <ul class="nav navbar-nav">
							 <li><a class="active" href="http://www.bglandmarks.com"><i aria-hidden="true" class="fa fa-home"></i>Начало</a></li>
							 <li class="dropdown">
								 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Меню<span class="caret"></span></a>
								 <ul class="dropdown-menu">
									 <li class="dropdown-header">Забележителности</li>
									 <li><a href="historical.php"><span class="glyphicon glyphicon-tower " aria-hidden="true"></span>Исторически</a></li>
										<li><a href="natural.php"><i class="fa fa-tree" aria-hidden="true"></i>Природни</a></li>
										<li><a href="arhitecture.php"><i class="fa fa-university" aria-hidden="true"></i>Архитектурни</a></li>
									 <li role="separator" class="divider"></li>
									 <li><a href="#">Галерия</a></li>
								<li><a href="#">Полезни връзки</a></li>
								 </ul>
							 </li>
							 <li><a href="#" data-toggle="modal" data-target="#aboutus">За нас</a></li>
						 </ul>
					 </div>
				 </div>
			 </nav>
		 </div>
	 </div>
	 <div id="myCarousel" class="carousel slide" data-ride="carousel">
		 <!-- Indicators -->
		 <ol class="carousel-indicators">
			 <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			 <li data-target="#myCarousel" data-slide-to="1"></li>
			 <li data-target="#myCarousel" data-slide-to="2"></li>
		 </ol>
		 <div class="carousel-inner" role="listbox">
			 <div class="item active">
				 <img class="first-slide" src="../assets/img/5.img" alt="First slide">
				 <div class="container">
					 <div class="carousel-caption">
						 <h1>Example headline.</h1>
						 <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
						 <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
					 </div>
				 </div>
			 </div>
			 <div class="item">
				 <img class="second-slide" src="../assets/img/4.img" alt="Second slide">
				 <div class="container">
					 <div class="carousel-caption">
						 <h1>Another example headline.</h1>
						 <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						 <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
					 </div>
				 </div>
			 </div>
			 <div class="item">
				 <img class="third-slide" src="../assets/img/8.img" alt="Third slide">
				 <div class="container">
					 <div class="carousel-caption">
						 <h1>One more for good measure.</h1>
						 <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						 <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
					 </div>
				 </div>
			 </div>
		 </div>
		 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			 <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			 <span class="sr-only">Previous</span>
		 </a>
		 <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			 <span class="sr-only">Next</span>
		 </a>
	 </div><!-- /.carousel -->
