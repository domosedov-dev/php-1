<?php
require_once __DIR__ . '/classes/GuestBook.php';
require_once __DIR__ . '/classes/Uploader.php';
require_once __DIR__ . '/classes/News.php';
require_once  __DIR__ . '/classes/Article.php';
require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/classes/DB.php';


$config = include __DIR__ . '/config.php';

$db = new DB($config);

$data = $db->query('SELECT * FROM `news` WHERE id=:id', [':id' => 1]);
var_dump($data);

