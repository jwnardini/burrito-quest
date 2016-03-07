<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Object.php";
    require_once __DIR__."/../src/Player.php";
    require_once __DIR__."/../src/Stage.php";

    $app = new Silex\Application();

    use Symfony\Component\HttpFoundation\Request;
    Request::enableHttpMethodParameterOverride();

    $server = 'mysql:host=localhost;dbname=burritos';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    return $app;
?>
