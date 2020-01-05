<?php

require __DIR__ . '/../app/bootstrap.php';

$username = 'Clement';
$logged = true;

$users = ['clement', 'tomy', 'jacques'];

$script = "<script>alert('Bonjour');</script>";

echo $twig->render('index.twig', [
    'username' => $username,
    'logged' => $logged,
    'users' => $users,
    'script' => $script
]);