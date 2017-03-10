<?php 
require 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('tpl');
$env = new Twig_Environment($loader);
$env->addGlobal('x',100);
$f = new Twig_SimpleFunction('upper', function($str){
	return strtoupper($str);
});
$filt = new Twig_SimpleFilter('filt', function($str){
	return $str[0];
});
$newFilter = new Twig_SimpleFilter('newf', function($str, $num=1){
	return substr($str, 0, $num);
});

$env -> addFunction($f);
$env -> addFilter($filt);
$env -> addFilter($newFilter);

$o = new stdClass;

$o -> prop = 100;


echo $env->render('home.twig', [
		'number'=>333,
		'six'=>6,
		'a'=>[1,2,3],
		'x'=>'variable',
		'title' => 'Twig'

	]);



?>