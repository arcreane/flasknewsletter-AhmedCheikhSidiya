<?php

  function dbConnect(){
    try{
      $db = new PDO('mysql:host=localhost;port=3306;dbname=dv20cheikh;charset=utf8mb4', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $exception) {
      die( 'Erreur : ' . $exception->getMessage() );
    }

    $db->query("SET lc_time_names = 'fr_FR'");
    
    return $db;
  }


?>