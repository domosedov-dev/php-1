<?php
require_once __DIR__ . '/classes/GuestBook.php';
require_once __DIR__ . '/classes/Uploader.php';
require_once __DIR__ . '/classes/News.php';
require_once  __DIR__ . '/classes/Article.php';
require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/classes/NewsDb.php';
require_once __DIR__ . '/classes/ArticleDb.php';


$news = new NewsDb(include __DIR__ . '/config.php');

$view = new View();
$view->assign('news', $news->getNews());
$view->display(__DIR__ . '/templates/news.php');


