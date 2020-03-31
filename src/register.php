<?php

require_once __DIR__.'/bootstrap.php';


define('URL_PATH', '/');
define( 'COOKIE_EXPIRES', (time() + (86400 * 30))); // 86400 = 1 day

if (isset($_POST['email']) === True) {
        session_start();
        // storing the email and password in SESSION variable.
        $_SESSION['email']    = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        error_log(json_encode($_SESSION));
}

$projectCount = 3;
$project = 'project';

if ($projectCount > 1) {
  $project = 'projects';
}

echo $twig->render('user.html.twig', [
    'name'       => $_SESSION['email'],
    'projectCount' => $projectCount,
    'project'      => $project
]);
