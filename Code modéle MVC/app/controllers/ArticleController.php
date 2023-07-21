<?php
require_once 'app/models/ArticleModel.php';

class ArticleController
{
    public function showByCategory($categoryId)
    {
        $articles = ArticleModel::getArticlesByCategory($categoryId);
        require 'app/views/articles.php';
    }
}
?>
