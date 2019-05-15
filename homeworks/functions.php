<?php
function getUsersList()
{
    return [
        'Alex' => password_hash('12345', 1),
        'Dave' => password_hash('pass123', 1),
    ];
}

function existUser($login)
{
    return array_key_exists($login, getUsersList());
}

function checkPassword($login, $password)
{
    $users = getUsersList();
    if (existUser($login)) {
        if (password_verify($password, $users[$login])) {
            return true;
        }
    }
    return false;
}

function getCurrentUser()
{
    if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
        return $_SESSION['user'];
    }
    return null;
}

function getImages($path)
{
    return array_filter(scandir($path), function ($value) {
        return !is_dir($value);
    });

}