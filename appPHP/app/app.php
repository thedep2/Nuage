<?php

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;

// Register global error and exception handlers
ErrorHandler::register();
ExceptionHandler::register();

// Register service providers.
$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array(
		'twig.path' => __DIR__.'/../views',
));

// Register services.
$app['dao.actu'] = $app->share(function ($app) {
	return new Nuage\DAO\ActuDAO($app['db']);
});

// Register services.
$app['dao.photo'] = $app->share(function ($app) {
	return new Nuage\DAO\PhotoDAO($app['db']);
});