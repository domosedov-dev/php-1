<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-1 Ex.3</title>
    <style>
        input {
            margin: 5px;
        }

        .result {
            background-color: cornflowerblue;
            margin: 5px;
        }
    </style>
</head>
<body>

<?php

$num1 = $_GET['num1'] ?? 0;
$num2 = $_GET['num2'] ?? 0;
$operation = $_GET['operation'] ?? '+';

switch ($operation) {
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '/':
        $result = $num1 / $num2;
        break;
}

?>


<form action="/index1_2.php" method="get">
    <label for="num1">Number 1:</label>
    <input id="num1" type="number" name="num1" value="<?php echo $num1; ?>">
    <br>
    <select name="operation" id="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <br>
    <label for="num2">Number 2:</label>
    <input id="num2" type="number" name="num2" value="<?php echo $num2; ?>">
    <br>
    <button type="submit">Вычислить</button>
</form>

<div class="result">
    Result: <?php echo $result; ?>
</div>
</body>
</html>