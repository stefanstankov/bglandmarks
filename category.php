<?php	require 'includes/header.php';?>
<?php
  	$pageTitle = 'Начало';

    include_once 'classes/dataBase.php';
    $db = dataBase::init();

    if(isset($_GET['category'])){
      $lang = $_SESSION['language'];
      $catId = $_GET['category'];
      $query = 'select * from CATEGORIES where cat_id='.$catId.' and lang="'.$lang.'";';
      $row = $db->query($query);
      $category = $row->fetch(PDO::FETCH_ASSOC);
      if(!$row) {
        http_response_code(404);
      }
    } else {
      http_response_code(404);
    }

    try {
      $query = 'select * from landmarks where lang="'.$lang.'" and category="'.$category['cat_id'].'";';
      $postsQuery = $db->query($query);
      $posts = $postsQuery->fetchAll(PDO::FETCH_ASSOC);
    } catch(Exception $e) {
          exit($e);
    }
?>
    <br>
    <br>
    <div class="view">
    <div class="animated fadeInUp text-center flex-center">
      <div class="container">
        <div class="panel panel-default panel-article">
          <div class="panel-heading">
    <h1><span class="text-color1"><?=$category['title']?></span><span class="pull-right"><a class="text-color1" href="javascript:history.go(-1)"><i class="fa fa-times" aria-hidden="true"></i></a></span></h1>
      </div>
<div class="panel-body row">

  <?php foreach($posts as $post) { ?>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
  	<div class="zodiac-box">
  	  <a class="nounderline" href="/post.php?post=<?=$post["post_id"]; ?>">
  		 <div class="box-icon grow">
  			 <span class="fa <?= $category['icon']?> custom-glyphicon box-icon-a"></span>
  		 </div>
       <br>
  		<div class="info">
          <?php $image = explode(",",$post['image']); ?>
  			  <img src="assets/img/<?=$image[0] ?>" class="img-responsive" alt="<?= ucwords($post['title']); ?>">
        <br>
  			<a class="btn btn-block box-icon-h btn-round" href="/post.php?post=<?=$post["post_id"]; ?>"><i class="fa fa-arrow-right" aria-hidden="true"></i> <?= ucwords($post['title'])?> </a>
  		</div>
      </a>
  	 </div>
  </div>
<?php   } ?>


</div>
</div>
    </div>
      </div>
      </div>

        	<?php require 'includes/footer.php' ?>
