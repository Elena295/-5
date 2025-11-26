<?php
spl_autoload_register(function ($class) {
    if (strpos($class, 'Twig\\') === 0) {
        $file = __DIR__ . '/../vendor/Twig/src/' . str_replace('\\', '/', substr($class, 5)) . '.php';
        if (file_exists($file)) {
            require_once $file;
        }
    }
});

$loader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environment($loader);

echo $twig->render('promo-reviews.html.twig');
?>