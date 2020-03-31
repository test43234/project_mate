<?php

require_once __DIR__.'/bootstrap.php';

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
