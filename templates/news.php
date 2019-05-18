<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        article {
            background-color: darkolivegreen;
            margin: 10px;
        }
    </style>
    <title>News</title>
</head>
<body>

<h1>News!</h1>

<?php

$news = $this->data['news'];

foreach ($news as $article) { ?>

    <a href="/article.php?id=<?php echo $article->getArticle()['id']; ?>"><h1><?php echo $article->getArticle()['title']; ?></h1></a>
    <h3><?php echo $article->getArticle()['author']; ?></h3>
    <p><?php echo $article->getArticle()['content']; ?></p>
    <hr>

<?php } ?>


</body>
</html>