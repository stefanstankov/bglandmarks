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

	<div class="masthead">
	        <h3 class="text-muted">Bulgaria landmarks</h3>
	        <nav>
	          <ul class="nav nav-justified">
				<li><a class="active" href="http://www.bglandmarks.com"><i aria-hidden="true" class="fa fa-home"></i>Начало</a></li>
	            <li> <a href="#" class="menu-btn">&#9776; Меню</a></li>
				<li><a href="#" data-toggle="modal" data-target="#aboutus">
				<i id="info" class="material-icons">info_outline</i> За нас</a></li>
	          </ul>
	        </nav>
	      </div>
	<nav class="pushy pushy-left">
            <ul>
							  <li id="pushy-logo" class="pushy-link"><a href="#">Bulgarian landmarks</a></li>
							<hr/>
                <li class="pushy-submenu">
                    <a href="#">Забележителности</a>
                    <ul>
                        <li class="pushy-link"><a href="historical.php"><span class="glyphicon glyphicon-tower " aria-hidden="true"></span>Исторически</a></li>
                        <li class="pushy-link"><a href="natural.php"><i class="fa fa-tree" aria-hidden="true"></i>Природни</a></li>
                        <li class="pushy-link"><a href="arhitecture.php"><i class="fa fa-university" aria-hidden="true"></i>Архитектурни</a></li>
                    </ul>
                </li>
								<hr/>
                        <li class="pushy-link"><a href="#">Галерия</a></li>
												<hr />
                        <li class="pushy-link"><a href="#">Полезни линкове</a></li>
												  </ul>
        </nav>
</hr>
