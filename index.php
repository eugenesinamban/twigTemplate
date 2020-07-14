<?php
require_once __DIR__ . "/bootstrap.php";

$viewVars = [
    'title' => 'Main Page',
    'style' => 'style/style.css'
];

echo $twig->render('index.html.twig', $viewVars);