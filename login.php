<?php

session_start();

$USERNAME = "stefkata";
$PASSWORD = "LT-dd88";

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

  header("Location: admin.php");
}

if(isset($_POST['USERNAME']) && isset ($_POST['PASSWORD'])){

  if($_POST['USERNAME'] == $USERNAME && $_POST['PASSWORD'] == $PASSWORD){

    $_SESSION['loggedin'] = true;
    header(Location : admin.php);
  }
}

 ?>
