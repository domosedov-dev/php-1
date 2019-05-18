<?php
require_once __DIR__ . '/classes/GuestBook.php';
require_once __DIR__ . '/classes/Uploader.php';
require_once __DIR__ . '/classes/News.php';
require_once  __DIR__ . '/classes/Article.php';
require_once __DIR__ . '/classes/View.php';

$news = new News(__DIR__ . '/data.txt');
$data = $news->getNews();

$view = new View();

$view->assign('news', $data);

$view->display(__DIR__ . '/templates/news.php');
