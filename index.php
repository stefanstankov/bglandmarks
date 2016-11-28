<?php
  	$pageTitle = 'Начало';

 		require 'includes/header.php';
?>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      	<div class="section section-basic text-center article-color container">
          <h2><?= EDITORS_CHOISE;?></h2>
          <hr/>
          <div class="row">
            <div class="col-md-12">
            <div class="flexslider">
              <ul class="slides">
                <li>
                  <img src="/assets/img/main.JPG"/>
                </li>
                <li>
                  <img src="/assets/img/main1.jpg"/>
                </li>
                <li>
                  <img src="/assets/img/main2.jpg"/>
                </li>
                <li>
                  <img src="/assets/img/main3.jpg"/>
                </li>
              </ul>
            </div>
            </div>
                </div>
          <div class="row">
           <div class="col-md-4 ">
            <p> <h2>Дяволския мост</h2></p>
             <div class="caption">
               <p>Открит е през 1965 година със задачата да проучва, съхранява и популяризира културно-историческото наследство в Източни Родопи...</p>
               <p><a href="utroba_cave.php" class="btn btn-primary" role="button">Научи повече</a></p>
             </div>
           </div>
           <div class="col-md-4">
             <p> <h2>Дяволския мост</h2></p>
              <div class="caption">
                <p>Открит е през 1965 година със задачата да проучва, съхранява и популяризира културно-историческото наследство в Източни Родопи...</p>
                <p><a href="utroba_cave.php" class="btn btn-primary" role="button">Научи повече</a></p>
              </div>
          </div>
           <div class="col-md-4">
             <p> <h2>Дяволския мост</h2></p>
              <div class="caption">
                <p>Открит е през 1965 година със задачата да проучва, съхранява и популяризира културно-историческото наследство в Източни Родопи...</p>
                <p><a href="utroba_cave.php" class="btn btn-primary" role="button">Научи повече</a></p>
              </div>
           </div>
         </div>
         <div class="row">
          <div class="col-md-4 ">
            <p> <h2>Дяволския мост</h2></p>
             <div class="caption">
               <p>Открит е през 1965 година със задачата да проучва, съхранява и популяризира културно-историческото наследство в Източни Родопи...</p>
               <p><a href="utroba_cave.php" class="btn btn-primary" role="button">Научи повече</a></p>
             </div>
          </div>
          <div class="col-md-4 ">
            <p> <h2>Дяволския мост</h2></p>
             <div class="caption">
               <p>Открит е през 1965 година със задачата да проучва, съхранява и популяризира културно-историческото наследство в Източни Родопи...</p>
               <p><a href="utroba_cave.php" class="btn btn-primary" role="button">Научи повече</a></p>
             </div>
          </div>
          <div class="col-md-4 ">
            <p> <h2>Дяволския мост</h2></p>
             <div class="caption">
               <p>Открит е през 1965 година със задачата да проучва, съхранява и популяризира културно-историческото наследство в Източни Родопи...</p>
               <p><a href="utroba_cave.php" class="btn btn-primary" role="button">Научи повече</a></p>
             </div>
          </div>
        </div>
        <div class="row">
         <div class="col-md-4 ">
           <p> <h2>Дяволския мост</h2></p>
            <div class="caption">
              <p>Открит е през 1965 година със задачата да проучва, съхранява и популяризира културно-историческото наследство в Източни Родопи...</p>
              <p><a href="utroba_cave.php" class="btn btn-primary" role="button">Научи повече</a></p>
            </div>
         </div>
         <div class="col-md-4 ">
           <p> <h2>Дяволския мост</h2></p>
            <div class="caption">
              <p>Открит е през 1965 година със задачата да проучва, съхранява и популяризира културно-историческото наследство в Източни Родопи...</p>
              <p><a href="utroba_cave.php" class="btn btn-primary" role="button">Научи повече</a></p>
            </div>
         </div>
         <div class="col-md-4 ">
           <p> <h2>Дяволския мост</h2></p>
            <div class="caption">
              <p>Открит е през 1965 година със задачата да проучва, съхранява и популяризира културно-историческото наследство в Източни Родопи...</p>
              <p><a href="utroba_cave.php" class="btn btn-primary" role="button">Научи повече</a></p>
            </div>
         </div>
       </div>
       <script>

       $(window).load(function() {
       	$('.flexslider').flexslider({
       		animation: "slide",
       		prevText: '<i class="fa fa-chevron-left" aria-hidden="true"></i>',           //String: Set the text for the "previous" directionNav item
       		nextText: '<i class="fa fa-chevron-right" aria-hidden="true"></i>'               //String: Set the text for the "next" directionNav item
       	});
       });

       </script>

            	<?php require 'includes/footer.php' ?>
