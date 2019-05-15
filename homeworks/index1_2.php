<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-1 ex.2</title>
</head>
<body>
    <?php

    $images = array_filter(scandir(__DIR__ . '/img/'), function ($value) {
        return !in_array($value, ['.', '..']);
    });
    ?>

    <?php foreach ($images as $index => $image): ?>
        <a href="/image1_2.php?id=<?php echo $index ?>"><img src="/img/<?php echo $image ?>" alt="alt"></a>
    <?php endforeach; ?>

</body>
</html>