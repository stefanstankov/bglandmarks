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
	<meta name="discription" content="This is a website for Bulgarian landmarks / Това уеб сайт за български забележителности">
	<link rel="apple-touch-icon" sizes="76x76" href="/assets/img/logo.png">
	<link rel="icon" type="image/png" href="/assets/img/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300|Roboto:300&amp;subset=cyrillic" rel="stylesheet">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php echo $pageTitle; ?> - Bulgarian Landmarks</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	<!-- CSS Files -->
	<link rel="stylesheet" href="/assets/css/animate.css" />
	<link rel="stylesheet" href="/assets/bootstrap/dist/css/bootstrap.min.css">
	<link href="/assets/css/app.css" rel="stylesheet" />
  <link rel="stylesheet" href="/assets/css/site.css" />
	<link rel="stylesheet" href="/assets/css/normalize.css" />
</head>
<body class="index-page">
	<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			 <a class="navbar-brand" href="/"><img src="/assets/img/logo2.png"/><div id="nbt"><span>Bulgarian</span> <span>Landmarks</span></div></a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
					 <li><a class="active" href="/"><i aria-hidden="true" class="fa fa-home"></i><?= HOME;?></a></li>
					 <li class="dropdown">
						 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= CATEGORIES;?><span class="caret"></span></a>
						 <ul class="dropdown-menu">
							 <li class="dropdown-header"><span class="text-color1"><?= LANDMARKS;?></span></li>
								<li role="separator" class="divider"></li>
								<li><a href="natural.php"><i class="fa fa-tree" aria-hidden="true"></i><span class="text-color"><?= NATURAL;?></span></a></li>
								<li><a href="arhitecture.php"><i class="fa fa-university" aria-hidden="true"></i><span class="text-color"><?= ARCHITECTURAL;?></span></a></li>
								<li><a href="historical.php"><span class="glyphicon glyphicon-tower " aria-hidden="true"></span><span class="text-color"><?= HISTORICAL;?></span></a></li>
							 <li role="separator" class="divider"></li>
							 <li><a href="gallery.php"><span class="text-color"><?= GALLERY;?></span></a></li>
						 </ul>
					 </li>
					<li><a href="#" class="btn hidden-xs" id="menu-toggle" data-toggle="collapse" data-target="#demo"><?= QL;?></a></li>
					<li><a href="#" data-toggle="modal" data-target="#aboutus"><?= ABOUT_US;?></a></li>
					<li><a href="#" data-toggle="modal" data-target="#admin"><?= ADMIN;?></a></li>
					 <li><a href='?language=bg'><img src="/assets/img/bg_new.png"/></a></li>
						 <li><a href='?language=en'><img src="/assets/img/en_new.png"/></a></li>
				 </ul>
				</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>
<div class="jumbotron">
  <div class="container">
<div id="demo" class="collapse">
<br>
<br>
	<table class="table table-striped table-responsive">
	<thead>
	<tr>
	<th>#</th>
	<th><span class="text-color1">Natural</span></th>
	<th><span class="text-color1">Arhitectural</span></th>
	<th><span class="text-color1">Historical</span></th>
	</tr>
	</thead>
	<tbody>
	<tr>
	<th scope="row">1</th>
	<td><a href="utroba_cave.php"><?= UTROBA;?></a></td>
	<td><a href="museum.php"><?= MUSEUM;?></a></td>
	<td><a href="ustra.php"><?= USTRA;?></a></td>
	</tr>
	<tr>
	<th scope="row">2</th>
	<td><a href="stone_mushrooms.php"><?= STONE;?></a></td>
	<td><a href="statue.php"><?= STATUE;?></a></td>
	<td><a href="perperikon.php"><?= PERPERIKON;?></a></td>
	</tr>
	<tr>
	<th scope="row">3</th>
	<td><a href="eagle_rocks.php"><?= EAGLE_ROCKS;?></a></td>
	<td><a href="dam_wall.php"><?= Kardzhali_Dam;?></a></td>
	</tr>
	<tr>
	<th scope="row">4</th>
	<td><a href="swan_village.php"><?= SWAN_VILLAGE;?></a></td>
	<td><a href="devil_bridge.php"><?= BRIDGE;?></a></td>
	</tr>
	<tr>
	<th scope="row">5</th>
	<td><a href="forest.php"><?= FOREST;?></a></a></td>
	</tr>
	</tbody>
	</table>
</div>
</div>
</div>
