<?php  
require 'vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$con = [
	'driver' => 'pdo_mysql',
	'host'   => 'localhost',
	'user'   => 'root',
	'password' => '',
	'dbname' => 'doctrine'
];

$conf = Setup::createAnnotationMetadataConfiguration(['./src']);
$em = EntityManager::create($con, $conf);