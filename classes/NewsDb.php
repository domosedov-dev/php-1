<?php
require_once __DIR__ . '/DB.php';

class NewsDb
{
    protected $data;

    public function __construct($config)
    {
        $db = new DB($config);
        $this->data = $db->query('SELECT * FROM `news` ORDER BY id DESC', []);
    }

    public function getNews()
    {
        $ret = [];
        foreach ($this->data as $article) {
            $ret[] = new ArticleDb($article);
        }
        return $ret;
    }

}