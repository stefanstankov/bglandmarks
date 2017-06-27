<?php

    if(!isset($_SESSION['loggedin']) || $_SESSION[loggedin] == false){

      header("Location: index:php");
    }
 ?>
 <?php require 'includes/header.php' ?>


<h2> Welcome into admin page !!!! </h2>


 <?php require 'includes/footer.php' ?>
