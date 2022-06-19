<?php

require_once __DIR__."/../vendor/autoload.php";

use Alura\Doctrine\Helper\EntityManagerFactory;
use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
/**
 * 
 * @var Aluno $alunoBuscado
 */
$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

$alunoBuscado = $alunoRepository->findBy([
    'id' => $argv[1]
]); 

$numero = $argv[2];

$telefone = new Telefone();
$telefone->setNumero($numero);

$alunoBuscado[0]->addTelefones($telefone);
?>