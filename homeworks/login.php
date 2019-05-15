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
</head>
<body>
<?php
require_once __DIR__ . '/functions.php';

if (isset($_POST['userName']) && isset($_POST['userPass'])) {
    if (checkPassword($_POST['userName'], $_POST['userPass'])) {
        $_SESSION['user'] = $_POST['userName'];
    }
}

if (getCurrentUser() !== null) {
    header('Location: /index5.php');
} else { ?>

    <form action="login.php" method="post">
        <label for="userName">username</label>
        <input type="text" name="userName" id="userName">
        <label for="userPass">password</label>
        <input type="password" name="userPass" id="userPass">
        <button type="submit">Go!</button>
    </form>

<?php } ?>


</body>
</html>