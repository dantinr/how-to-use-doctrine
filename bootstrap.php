<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = [__DIR__.'/src'];

$isDevMode = false;

// the connection configuration
$dbParams = array(
	'host'		=> '127.0.0.1',
	'driver'   => 'pdo_mysql',
	'user'     => 'root',
	'password' => '123456abcd',
	'dbname'   => 'sc77',
	'charset'	=> 'utf8'
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);