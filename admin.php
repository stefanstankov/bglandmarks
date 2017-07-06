<?php

$username = "stefkata";
$password = "LT-dd88";

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

  header("Location : admin.php");
}

if(isset($_POST['username']) && isset($_POST['password'])){

  if($_POST['username'] == $username && $_POST['password'] == $password){

    $_SESSION['loggedin'] = true;
    header("Location : admin.php");
  }
}

 ?>

<?php
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false){

      header("Location: index.php");
    }
 ?>
 <?php require 'includes/header.php' ?>


<h2 id="adminpage" class="text-center"> Welcome to admin page !!!! </h2>


 <?php require 'includes/footer.php' ?>
