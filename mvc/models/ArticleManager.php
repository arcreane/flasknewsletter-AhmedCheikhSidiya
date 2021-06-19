<?php
class ArticleManager extends Model
{
	public function getArticles()
	{
		$this->getBdd();
		return $this->getALL('articles','Article');
	}
}