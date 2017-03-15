<?php 
require 'bootstrap.php';
use Doctrine\ORM\tools\Console\ConsoleRunner;

return ConsoleRunner::createHelperSet($em);