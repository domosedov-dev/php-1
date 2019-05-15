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

function getLines($path)
{
    return file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
}

if (isset($_POST['newLine']) && $_POST['newLine'] !== '') {
    file_put_contents($path, PHP_EOL . $_POST['newLine'], FILE_APPEND);
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
}

$lines = getLines($path);

echo '<ul>';
foreach ($lines as $line): ?>

    <li><?php echo $line; ?></li>

<?php endforeach;
echo '</ul>';
?>
<h3>Добавить новую запись</h3>
<form action="/" method="post">
    <label for="newLine">New Line</label>
    <input type="text" id="newLine" name="newLine">
    <button type="submit">Submit!</button>
</form>

</body>
</html>