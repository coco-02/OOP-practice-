<?php

session_start();
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/../templates');
$twig = new Environment($loader);

echo $twig->render('header.html.twig');
?>