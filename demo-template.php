<?php

header('Content-type: text/html; charset=utf-8');

require_once 'lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => '_compilation_cache',
    'auto_reload'=> 'true',
));

// Simulate a database pull
$json = file_get_contents('data/events.json');
$data = json_decode($json,true);

echo $twig->render('index.html',$data);

?>