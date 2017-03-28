<?php 
$loader = require 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints as C;
use Symfony\Component\Validator\ValidatorBuilder;
use Doctrine\Common\Annotations\AnnotationRegistry;



$s = new Session();
$res = new Response;

$r = Request::createFromGlobals();

$r->setSession(new Session());
$s = $r -> getSession();

$s->set('x',$s->get('x',0)+1);


dump($r->query->get('name'));
dump($r->headers->get('Host'));
dump($r->getMethod());
dump($r->getHost());
dump($r->getPathInfo());

dump($s->get('x'));

/*$file = $r->files->get('name');
$file->move('./');*/

$res->setContent('hello <hr>');
$res->send();

//$res->headers->set('content-disposition','attachment');
//$res->send();

$jres = new JsonResponse(['a'=>1, 2,3,4]);
$jres->send();

//$rres = new RedirectResponse('http://google.com');
//$rres->send();

$v = Validation::createValidator();

$errors = $v->validate(23, [
		new c\Blank(['message'=>'XXX']),
		new c\IsFalse,
		new c\Email,
		new c\NotBlank,
		new c\URL,
		new c\Range(['min'=>1,'max'=>10]),
		new c\Length(['min'=>6, 'max'=>6,
			'maxMessage'=> 'too long',
			'minMessage'=>'too short',
			'exactMessage'=>'incorrect'])
	]);

function check_value($value){
	return $value[0] === 'H';
};

$own_error= $v -> validate(check_value('hello'), [
		new c\IsTrue(['message'=> 'Should start with "H"']),
	]);

dump($errors[0]);
dump(strval($errors));
dump(strval($own_error));

// Group Validation

AnnotationRegistry::registerLoader([$loader, 'loadClass']);

$builder = new ValidatorBuilder;
$builder->enableAnnotationMapping();

$v = $builder -> getValidator();

$u = new User('some name', 123);

$user_errors = $v->validate($u);

dump(strval($user_errors));




?>

<!-- <form method="POST" enctype="multipart/form-data" action=""> -->
<form action="">
	<!-- <input name="file" type="file"> -->
	<input type="text" name="name" id="">
	<input type="submit" value="Submit">
</form>