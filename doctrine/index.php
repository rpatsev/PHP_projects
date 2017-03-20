<?php 

require 'bootstrap.php';
//require 'createAndSearch.php';

$u_repo = $em -> getRepository('User');

//$p_repo = $em -> getRepository('Post');

/*$user = $u_repo -> find(4);
$p = new Post;
$p -> setTitle('Third');

$p -> setUser($user);
$user -> addPost($p);
$em->persist($p);
$em->flush();
*/

/*$u1 = $u_repo->find(2);
$u2 = $u_repo->find(3);
$u3 = $u_repo->find(4);

$p1 = $u1 -> getPosts()[0];

//$p = $p_repo -> find(1);
//dump($p1->getTitle());

$p1 -> setUser($u2);
$em -> flush();

dump($u2->getPosts());
dump($u2);*/

$p = new Post;

$p -> setTitle('First');

$em->persist($p);
$em->flush();

dump($p);


