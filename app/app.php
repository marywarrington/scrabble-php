<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";


    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig', array(
            // twig input associative array
            "form"=>true, "head"=>true
        ));
    });

    $app->post("/results", function() use ($app) {
        $my_Scrabble = new Scrabble;
        $result = $my_Scrabble->playScrabble($_POST['input']);
        return $app['twig']->render('index.html.twig', array(
            "form"=>true, "head"=>true, "message"=>array(
                'type' => 'info',
                'text' => $_POST['input'] . " is worth " . $result . " points.")
        ));
    });

    return $app;
?>
