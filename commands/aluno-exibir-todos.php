<?php

require_once __DIR__."/../vendor/autoload.php";

use Alura\Doctrine\Helper\EntityManagerFactory;
use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;

/**
 * 
 * @var Aluno $aluno
 */

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

$alunoBuscado = $alunoRepository->findAll();



foreach($alunoBuscado as $aluno){
    echo"----------------- \n Id        | {$aluno->getId()} \n Nome      | {$aluno->getNome()}
";
        $telefones = $aluno
            ->getTelefones()
            ->map(function (Telefone $telefone) {
                return $telefone->getNumero();
            })
            ->toArray();  
            /**Está utilizando o método map da função getTelefone, esse método é herdado
             * a partir da definição do retorno da função como uma Collection e o toArray
             * vai transformar toda a collection em um uma array única para a utilização do implode.
             */
            echo " Telefones | ".implode(' | ',$telefones)."\n";
    }

echo"----------------- \n ";

?>