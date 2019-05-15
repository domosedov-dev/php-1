<?php
$images = array_filter(scandir(__DIR__ . '/img/'), function ($value) {
    return !in_array($value, ['.', '..']);
});

$path = '/img/' . $images[$_GET['id']];

echo "<img src=\"$path\" alt=\"alt\">";
