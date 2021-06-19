<?php 

  require_once ('models/Post.php'); 

  $articles = getAllArticles();
  
  $view = 'views/indexView.php'; 

?>
