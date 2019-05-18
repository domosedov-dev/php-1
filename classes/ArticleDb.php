<?php
require_once __DIR__ . '/NewsDb.php';

class ArticleDb
{
    protected $article;

    public function __construct(array $article)
    {
        $this->article = $article;
    }

    /**
     * @return array
     */
    public function getArticle(): array
    {
        return $this->article;
    }
}