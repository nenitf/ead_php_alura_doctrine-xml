<?php

require_once 'vendor/autoload.php';

$entityManager = (new \Alura\Doctrine\Helper\EntityManagerCreator())->criaEntityManager();

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
