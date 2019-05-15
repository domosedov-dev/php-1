<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    <style>
        img {
            max-height: 100px;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Gallery</h1>

<?php

$directory = __DIR__ . '/img/';

function getImages($path)
{
    return array_filter(scandir($path), function ($value) {
        return !is_dir($value);
    });

}

?>

<?php foreach (getImages($directory) as $image): ?>
    <img src="img/<?php echo $image; ?>" alt="<?php echo $image; ?>">

<?php endforeach; ?>
<hr>
<form action="index4_2.php" method="post" enctype="multipart/form-data">
    <label for="image">Choose a file</label>
    <input type="file" name="image">
    <br>
    <button type="submit">Upload!</button>
</form>

<?php
var_dump($_FILES);
if(!empty($_FILES)) {
    if(isset($_FILES['image'])) {
        if($_FILES['image']['error'] === 0) {
            if($_FILES['image']['type'] === 'image/jpeg' || $_FILES['image']['type'] === 'image/png') {
                $tmp_name = $_FILES['image']['tmp_name'];
                $name = $_FILES['image']['name'];
                move_uploaded_file($tmp_name, $directory . $name);
            }
        }
    }
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
}
?>

</body>
</html>