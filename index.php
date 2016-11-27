<?php
    session_start();
    if(!isset($_SESSION['language'])){
         $_SESSION['language'] = 'bg';
        }

    if(isset($_GET['language']) && ($_GET['language'] == 'en' || $_GET['language'] == 'bg')){
    $_SESSION['language'] = $_GET['language'];
    }

    if(isset($_SESSION['language'])){
    include($_SESSION['language'].'.php');
    }

  	$pageTitle = 'Начало';

 		require 'includes/header.php';
?>
      	<div class="section section-basic text-center article-color container">

          <div class="row">
            <h2><?= EDITORS_CHOISE;?></h2>
            <hr/>
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
            	<?php require 'includes/footer.php' ?>
