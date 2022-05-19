<?php
require __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/vendor/twig/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_String();
$twig = new Twig_Environment($loader);

echo $twig->render('Hello {{ name }}!', array('name' => 'Fabien'));
