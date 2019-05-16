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



foreach ($this->data['news'] as $article): ?>
    <article>
        <?php echo $article->getArticle(); ?>
    </article>

<?php endforeach; ?>

</body>
</html>