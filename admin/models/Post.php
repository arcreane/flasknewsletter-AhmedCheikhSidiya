<?php
  
  function getArticles(){
    $db = dbConnect();
    $query = $db->query("SELECT * FROM articles");
    return 	$query->fetchAll();
  }
  
  function addPost($title, $description, $content, $bgColor){
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO articles (title, content, category_id, bg_color) VALUES (?, ?, ?, ?)');
    return $query->execute(
      [
        $title,
		$content,
        $category_id,
    		$bgColor
      ]
    );
  }
  
  function updateArticle($articleId, $title, $content, $category_id, $bgColor){
	$db = dbConnect();

	$query = $db->prepare('UPDATE articles SET title = :new_title, description = :new_description, content = :new_content, bg_color = :new_bg_color WHERE id = :post_id');
	$result =  $query->execute(
		[
			'new_description' => $description,
			'post_id' => $postId,
			'new_title' => $title,
			'new_content' => $content,
			'new_bg_color' => $bgColor
		]
	);
	
	return $result;
  }
  
  function getArticle($articleId) {
  	$db = dbConnect();
  	$query = $db->prepare("SELECT *
  	FROM articles
  	WHERE id = ?");
  	$query->execute([$articleId]);

  	return $query->fetch();
  }
  
  function deleteArticle($articleId){
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM articles WHERE id = ?');
    return $query->execute([$articleId]);
  }

?>