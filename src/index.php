<?php

require_once __DIR__.'/bootstrap.php';

error_reporting(E_ALL);
ini_set('display_errors', 'on');
ini_set("log_errors", 1);

echo $twig->render('index.html.twig', [
    'assetpath'  => './assets',
]);
