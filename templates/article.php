<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article</title>
</head>
<body>

<?php

$article = $this->data['article']->getArticle();

foreach ($article as $field) { ?>

    <h1><?php echo $field['title']; ?></h1>
    <p><?php echo $field['content']; ?></p>

<?php } ?>

</body>
</html>