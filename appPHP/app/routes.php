<?php

// Home page
$app->get('/', function () use ($app) {
    $actus = $app['dao.actu']->lastActus();
    return $app['twig']->render('index.html.twig', array('actus' => $actus));
});