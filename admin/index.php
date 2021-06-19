<?php
  
  setlocale(LC_ALL, "fr_FR"); #LC_ALL pour heure et jours LC_TIME que pour l'heure
  session_start();
  require_once('tools.php');
    
  if(isset($_GET['page'])){

    $page = $_GET['page'];

    switch ($page){

      case 'posts':
        require_once('controllers/postController.php');
        break;

      case '404':
        require_once('controllers/404Controller.php');
        break;

      default :
        header('Location: ./index.php?page=404');
        exit;
    }
  }
  else {
    $page = "";
    require_once('controllers/indexController.php');
  }

  require_once('layouts/front.php');

  if(isset($_SESSION['message'])){
    unset($_SESSION['message']);
  }
  if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
  } 

?>

