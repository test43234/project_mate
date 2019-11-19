<?php
require __DIR__.'/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__.'/templates');
$twig   = new Environment($loader);

$projectCount = 3;
$project = 'project';

if ($projectCount > 1) {
  $project = 'projects';
}

echo $twig->render('index.html.twig', [
    'name'         => 'John Doe',
    'projectCount' => $projectCount,
    'project'      => $project
]);
