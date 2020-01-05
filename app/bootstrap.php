<?php

require __DIR__ . '/../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__ . '/views');

$twig = new Twig_Environment($loader, [
    //'cache' => __DIR__ . '/../cache/views',
    'cache' => false,
    'debug' => true
]);

$twig->addExtension(new Twig_Extension_Debug);

$twig->addGlobal('auth', true);