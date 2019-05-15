<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-1</title>
</head>
<body>
<?php

$path = __DIR__ . '/data4.txt';

//$fh = fopen($path, 'r');
//
//while (!feof($fh)) {
//    $line = fgets($fh);
//    echo $line;
//}
//
//fclose($fh);
//
//$lines = file($path, 2);
//var_dump($lines);
//
//$content = file_get_contents($path);
//var_dump($content);
//
//readfile($path);

$fh = fopen($path, 'w');
fwrite($fh, 'Lalka');
fclose($fh);

file_put_contents($path, 'Ebaaaaaaaaaat', FILE_APPEND);
file_put_contents($path, 'Suka' . PHP_EOL, FILE_APPEND);
file_put_contents($path, 'blyat' . PHP_EOL, FILE_APPEND);


readfile($path);
?>
</body>
</html>