<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/PingPong.php';

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(
        new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__.'/../views/')
    );

    $app->get('/', function() use ($app) {
        // $list_of_numbers = new PingPong()
        // $list_of_numbers->countNumbers();
        // array('list_of_numbers'=> PingPong->countNumbers())
        return $app['twig']->render('home.html.twig');

    });

    return $app;
?>
