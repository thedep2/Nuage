<?php

// Home page
$app->get('/', function () use ($app) {
    $actus = $app['dao.actu']->lastActus();
    return $app['twig']->render('index.html.twig', array('actus' => $actus));
});

// portfolio
$app->get('/portfolio', function () use ($app) {
	$portfolio = $app['dao.photo']->getPortfolio(); 
	return $app['twig']->render('portfolio.html.twig', array('portfolio' => $portfolio));
});

// astro
$app->get('/astro', function () use ($app) {
	$astro = $app['dao.photo']->getAstro();
	return $app['twig']->render('astro.html.twig', array('astro' => $astro));
});