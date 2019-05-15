<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require_once __DIR__ . '/classes/GuestBook.php';
require_once __DIR__ . '/classes/Uploader.php';

$data = __DIR__ . '/data.txt';

$guest = new GuestBook($data);
$guest->append('Hello');
$guest->append('World!');
$guest->append('фыфвыфвыWorld!');
$guest->append('фывфывWorld!');
var_dump($guest->getData());
//$guest->save();

$uploader = new Uploader('image');
$uploader->upload();

?>

<form action="<?php $_SERVER['SCRIPT_NAME']; ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="image" id="image">
    <button type="submit">Upload!</button>
</form>


</body>
</html>