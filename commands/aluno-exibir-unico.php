<?php

require_once __DIR__."/../vendor/autoload.php";

use Alura\Doctrine\Helper\EntityManagerFactory;
use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;

/**
 * 
 * @var \Alura\Doctrine\Helper\EntityManagerFactory $entityManagerFactory
 */
$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunoBuscado = $entityManager->find(Aluno::class,$argv[1]);



/**
 * @var Aluno $alunoBuscado
 */
$telefones = $alunoBuscado
    ->getTelefones()
    ->map(function (Telefone $telefone) {
        return $telefone->getNumero();
    })
    ->toArray();

    $numeros =  implode(' | ',$telefones);
echo"----------------- \n Id        | {$alunoBuscado->getId()} \n Nome      | {$alunoBuscado->getNome()} \n Telefones | $numeros";

   

   

?>