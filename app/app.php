<?php

	require_once __DIR__.'/../vendor/autoload.php';
	require_once __DIR__.'/../src/Palindrome.php';

	$app = new Silex\Application();

	$app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

	$app->get('/', function() use ($app)
	{
		return $app['twig']->render('palindrome.html.twig');
	});

	$app->get('/palindrome', function() use ($app)
	{
		$palindrome = new Palindrome($_GET['inputString']);
		$result = $palindrome->isPalindrome();
		return $app['twig']->render('palindrome.html.twig', array('result' => $result));
	});

	return $app;

?>
