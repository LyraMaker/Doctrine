<?php

require_once __DIR__."/../vendor/autoload.php";

use Alura\Doctrine\Helper\EntityManagerFactory;
use Alura\Doctrine\Entity\Aluno;

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

$alunoBuscado = $alunoRepository->findBy([
    'id' => $argv[1]
]); 

echo"----------------- \n Id   | {$alunoBuscado[0]->getId()} \n Nome | {$alunoBuscado[0]->getNome()} \n
";


?>