<?php
require_once __DIR__ . '/classes/GuestBook.php';
require_once __DIR__ . '/classes/Uploader.php';
require_once __DIR__ . '/classes/News.php';
require_once  __DIR__ . '/classes/Article.php';
require_once __DIR__ . '/classes/View.php';

$path = __DIR__ . '/data.txt';

$news = new News($path);

$view = new View;

$view->assign('news', $news->getNews());

var_dump($view->getData());

$view->display(__DIR__ . '/templates/news.php');