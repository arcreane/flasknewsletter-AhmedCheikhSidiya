<?php

  function dbConnect(){
    try{
      $db = new PDO('mysql:host=localhost;dbname=dv20cheikh;charset=utf8', 'root', '');
      array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    }
    catch (Exception $exception) {
      die( 'Erreur : ' . $exception->getMessage() );
    }

    $db->query("SET lc_time_names = 'fr_FR'");
    
    return $db;
  }

  
  function checkEmailFormat($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
  }

  function dateTranslate($dateString){
      return strftime("%A %d %B %G à %H:%M", strtotime( $dateString ));
  }


?>