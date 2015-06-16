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

$app->register(new Silex\Provider\MonologServiceProvider(), array(
		'monolog.logfile' => __DIR__.'/../var/logs/nuage.log',
		'monolog.name' => 'Nuage',
		'monolog.level' => $app['monolog.level']
));


// Register services.
$app['dao.actu'] = $app->share(function ($app) {
	return new Nuage\DAO\ActuDAO($app['db']);
});

// Register services.
$app['dao.photo'] = $app->share(function ($app) {
	return new Nuage\DAO\PhotoDAO($app['db']);
});

// Register error handler
$app->error(function (\Exception $e, $code) use ($app) {
		switch ($code) {
			case 403:
				$message = 'Access denied.';
				break;
			case 404:
				$message = 'The requested resource could not be found.';
				break;
			default:
				$message = "Something went wrong.";
		}
		return $app['twig']->render('error.html.twig', array('message' => $message));
});