<?php

namespace Alura\Doctrine\commands;

require_once __DIR__."/../../vendor/autoload.php";

use Alura\Doctrine\Helper\EntityManagerFactory;
use Alura\Doctrine\Entity\Aluno;

$entityManagerFactory =new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$vlrId = $argv[1];

$aluno = $entityManager->getReference(Aluno::class,$vlrId);

$entityManager->remove($aluno);
$entityManager->flush();

?>