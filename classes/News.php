<?php
require_once __DIR__ . '/Article.php';

class News
{
    protected  $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function getNews()
    {
        $news = file($this->path, FILE_IGNORE_NEW_LINES);
        $data = [];
        foreach ($news as $article) {
            $data[] = new Article($article);
        }
        return $data;
    }
}