<?php
include_once 'classes/dataBase.php';

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
$db =  dataBase::init();

try {
	$lang = $_SESSION['language'];
	$query = 'select * from CATEGORIES where lang="'.$lang.'";';
	$row = $db->query($query);
	$categories = $row->fetchAll(PDO::FETCH_ASSOC);
} catch(Exception $e) {
	echo $e;
}





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
	<title> Bulgarian Landmarks</title>
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
								<?php foreach($categories as $category) { ?>
									<li><a href="/category.php?category=<?=$category['cat_id']?>" ><i class="fa <?=$category['icon']?>" aria-hidden="true"></i><span class="text-color"><?= $category['title'];?></span></a></li>
								<?php	} ?>


							 <li role="separator" class="divider"></li>
							 <li><a href="gallery.php"><span class="text-color"><?= GALLERY;?></span></a></li>
						 </ul>
					 </li>
					<li><a href="#" class="btn hidden-xs custombtn" id="menu-toggle" data-toggle="collapse" data-target="#demo"><?= QL;?></a></li>
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
<div class="jumbotron quicklinks">
  <div class="container">
<div id="demo" class="collapse">
<br>
<br>
<br>
<br>
<div class="row">

	<?php foreach($categories as $category) { ?>
<div class="col-md-4"><span class="text-color1"><?=$category['title'] ?></span></div>

	<?php } ?>


	<?php foreach($categories as $category) {
		try {
			$query = 'select * from landmarks where lang="'.$lang.'" and category="'.$category['cat_id'].'" limit 3;';
			$postsQuery = $db->query($query);
			$post = $postsQuery->fetchAll(PDO::FETCH_ASSOC);
		} catch(Exception $e) {
					exit($e);
		}
		echo '<div class="col-md-4"><ul class="list-unstyled">';
	 foreach($post as $p) { ?>

		<li class=""><a class="quicklinks" href="/post.php?post=<?=$p['post_id']?>"><?= $p['title']; ?></a></li>
	<?php } ?>
	</ul>
	</div>

	<?php } ?>


</div>
</div>
</div>
</div>
