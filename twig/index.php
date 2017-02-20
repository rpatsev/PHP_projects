<?php 
require 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('tpl');
$env = new Twig_Environment($loader);
$o = new stdClass;

$o -> prop = 100;


echo $env->render('home.twig', [
		'number'=>333,
		'six'=>6,
		'a'=>[1,2,3],
		'x'=>'variable'

	]);



?>