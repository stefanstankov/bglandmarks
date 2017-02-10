<?php
session_start();
if(!isset($_SESSION['language'])){
		 $_SESSION['language'] = 'en';
		}

if(isset($_GET['language']) && ($_GET['language'] == 'en' || $_GET['language'] == 'bg')){
$_SESSION['language'] = $_GET['language'];
}

if(isset($_SESSION['language'])){
include($_SESSION['language'].'.php');
}
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
	<link rel="icon" type="image/png" href="/assets/img/logo1.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php echo $pageTitle; ?> - Bulgarian Landmarks</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<!-- CSS Files -->

	<link rel="stylesheet" href="assets/css/animate.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="/assets/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/site.css" />
	<link rel="stylesheet" href="assets/css/normalize.css" />
</head>

<body class="index-page" onload="Timerstart();>
		<div class="navbar-wrapper">
		 <div class="container custom-contss">
 		 	<nav class="navbar navbar-inverse navbar-static-top custom-navss">
				 <div class="container">
					 <div class="navbar-header">
						 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							 <span class="sr-only">Toggle navigation</span>
							 <span class="icon-bar"></span>
							 <span class="icon-bar"></span>
							 <span class="icon-bar"></span>
						 </button>
						 <a class="navbar-brand" href="http://www.bglandmarks.com"><img src="/assets/img/logo2.png"/><div id="nbt"><span>Bulgarian</span> <span>Landmarks</span></div></a>
					 </div>
					 <div id="navbar" class="navbar-collapse collapse">
						 <ul class="nav navbar-nav navbar-right">
							 <li><a class="active" href="http://www.bglandmarks.com"><i aria-hidden="true" class="fa fa-home"></i><?= HOME;?></a></li>
							 <li class="dropdown">
								 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= CATEGORIES;?><span class="caret"></span></a>
								 <ul class="dropdown-menu">
									 <li class="dropdown-header"><?= LANDMARKS;?></li>
									  <li role="separator" class="divider"></li>
										<li><a href="natural.php"><i class="fa fa-tree" aria-hidden="true"></i><?= NATURAL;?></a></li>
										<li><a href="arhitecture.php"><i class="fa fa-university" aria-hidden="true"></i><?= ARCHITECTURAL;?></a></li>
										<li><a href="historical.php"><span class="glyphicon glyphicon-tower " aria-hidden="true"></span><?= HISTORICAL;?></a></li>
									 <li role="separator" class="divider"></li>
									 <li><a href="gallery.php"><?= GALLERY;?></a></li>
								 </ul>
							 </li>
							<li><a href="#" class="btn hidden-xs" id="menu-toggle"><?= QL;?></a></li>
							<li><a href="#" data-toggle="modal" data-target="#aboutus"><?= ABOUT_US;?></a></li>
							 <li><a href='?language=bg'><img src="/assets/img/bg_new.png"/></a></li>
							 	 <li><a href='?language=en'><img src="/assets/img/en_new.png"/></a></li>
						 </ul>
					 </div>
				 </div>
			 </nav>
		 </div>
	 </div>
<div id="wrapper" class="hidden-xs custom-color">
<div id="sidebar-wrapper">
<ul class="list-group">
<li class="list-group-item list-group-item-success"><?= NATURAL;?></li>
<li class="list-group-item custom-color"><a href="utroba_cave.php"><?= UTROBA;?></a></li>
<li class="list-group-item custom-color"><a href="stone_mushrooms.php"><?= STONE;?></a></li>
<li class="list-group-item custom-color"><a href="eagle_rocks.php"><?= EAGLE_ROCKS;?></a></li>
<li class="list-group-item custom-color"><a href="swan_village.php"><?= SWAN_VILLAGE;?></a></li>
<li class="list-group-item custom-color"><a href="forest.php"><?= FOREST;?></a></li>
<li class="list-group-item list-group-item-success"><?= ARCHITECTURAL;?></li>
<li class="list-group-item custom-color"><a href="museum.php"><?= MUSEUM;?></a></li>
<li class="list-group-item custom-color"><a href="statue.php"><?= STATUE;?></a></li>
<li class="list-group-item custom-color"><a href="dam_wall.php"><?= Kardzhali_Dam;?></a></li>
<li class="list-group-item custom-color"><a href="devil_bridge.php"><?= BRIDGE;?></a></li>
<li class="list-group-item list-group-item-success"><?= HISTORICAL;?></li>
<li class="list-group-item custom-color"><a href="ustra.php"><?= USTRA;?></a></li>
<li class="list-group-item custom-color"><a href="perperikon.php"><?= PERPERIKON;?></a></li>
</ul>
</div>
</div>
