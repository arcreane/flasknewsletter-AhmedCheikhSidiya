<?php


    try{
      $db = new PDO('mysql:host=localhost;port=3306;dbname=blog;charset=utf8', 'root', '', 
      array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $exception) {
      die( 'Erreur : ' . $exception->getMessage() );
    }

    $db->query("SET lc_time_names = 'fr_FR'");


    

    $datas = [
      'firstname' => 'admin',
      'lastname' => 'admin',
      'email' => 'admin@blog.fr',
      'password' => 'polo'
    ];

    $query = $db->prepare("INSERT INTO blog_users (firstname, lastname, email, password) VALUES (?,?,?,?)");

    $result = $query->execute(
    [
      $datas['firstname'],
      $datas['lastname'],
      $datas['email'],
      password_hash($datas['password'], PASSWORD_DEFAULT)
    ]
  );






?>