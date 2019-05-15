<?php
session_start();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            width: 900px;
            margin: 0 auto;
        }
        img {
            max-width: 19%;
        }
    </style>
</head>
<body>
<?php

require_once __DIR__ . '/functions.php';

$directory = __DIR__ . '/img/';

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
    header("Location: /index5.php");
}

if (getCurrentUser() !== null) : ?>

    <div><h2><?php echo 'Hello, ' . getCurrentUser(); ?></h2></div>

    <form action="index5.php" method="post" enctype="multipart/form-data">
        <label for="image">Choose a file</label>
        <input type="file" name="image" id="image">
        <br>
        <button type="submit">Upload!</button>
    </form>

<?php else: ?>

    <div><a href="/login.php">LogIn</a></div>

<?php endif; ?>

<?php foreach (getImages($directory) as $image): ?>

    <img src="img/<?php echo $image; ?>" alt="<?php echo $image; ?>">

<?php endforeach; ?>


</body>
</html>



