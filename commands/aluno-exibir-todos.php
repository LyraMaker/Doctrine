<?php

require_once __DIR__."/../vendor/autoload.php";

use Alura\Doctrine\Helper\EntityManagerFactory;
use Alura\Doctrine\Entity\Aluno;

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

$alunoBuscado = $alunoRepository->findAll();

for($i=0;$i < count($alunoBuscado); $i++){
    echo"----------------- \n Id   | {$alunoBuscado[$i]->getId()} \n Nome | {$alunoBuscado[$i]->getNome()}
";
}
echo"----------------- \n ";

?>