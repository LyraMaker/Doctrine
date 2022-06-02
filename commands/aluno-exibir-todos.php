<?php

namespace Alura\Doctrine\commands;

require_once __DIR__."/../vendor/autoload.php";

use Alura\Doctrine\Helper\EntityManagerFactory;
use Alura\Doctrine\Entity\Aluno;

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$vlrId = getopt('i:'); 

$alunoRepository = $entityManager->getRepository(Aluno::class);

$alunos = $alunoRepository->findAll();

var_dump($alunos);


?>