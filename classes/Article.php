<?php
require_once __DIR__ . '/News.php';

class Article
{
    protected $article;

    public function __construct($article)
    {
        $this->article = $article;
    }

    /**
     * @return mixed
     */
    public function getArticle()
    {
        return $this->article;
    }
}