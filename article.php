<?php
require_once __DIR__ . '/classes/DB.php';
require_once __DIR__ . '/classes/NewsDb.php';
require_once __DIR__ . '/classes/ArticleDb.php';
require_once __DIR__ . '/classes/View.php';

$articleId = $_GET['id'] ?? 1;

$db = new DB(include __DIR__ . '/config.php');

$article = new ArticleDb($db->query('SELECT * FROM `news` WHERE id=:id', ['id' => $articleId]));

$view = new View();

$view->assign('article', $article);

$view->display(__DIR__ . '/templates/article.php');


