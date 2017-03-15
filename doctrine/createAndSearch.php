<?php 

//$repo = $em->getRepository('User');

/*$user = new User;
$user->setName('Gena')->setAge(20);
$em->persist($user);
$user2 = new User;
$user2->setName('Conrad')->setAge(25);
$em->persist($user2);

$em->flush();*/
//dump($user, $user2);

//$user = $em -> find('User', 1);
//$user -> setAge(35);


/*$em -> remove($user);
$em -> flush();*/

//$user = $repo->findAll();

/*$user = $repo->findBy(
	['age' => [20,25]],
	['age'=>'ASC', 'name'=>'ASC'],
	2,
	1
);*/

//$user = $repo -> findOneBy(['age' => 25]);

//$user = $repo -> findByAge(25);

//$query = $em -> createQuery("SELECT u FROM User AS u");

//$query = $em -> createQuery("SELECT u FROM User AS u WHERE u.id > 1");

$query = $em ->createQueryBuilder()
			 ->select('u')
			 ->from('User', 'u')
			 ->where('u.id < 10')
			 ->orderBy('u.id','DESC')
			 ->getQuery('u');


			

$r = $query 
		//->setMaxResults(2)
		//->setFirstResult(1)
		//->getArrayResult();
		//->getSingleResult();
		//->getScalarResult();
		  ->getResult();

dump($r);