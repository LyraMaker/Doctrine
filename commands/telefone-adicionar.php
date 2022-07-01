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

$alunoBuscado = $entityManager->find(Aluno::class,$argv[1]);

for($i = 2; $i < $argc; $i++){
    $numero = $argv[$i];
    
    $telefone = new Telefone();
    $telefone->setNumero($numero);
    
    $alunoBuscado->addTelefones($telefone); 
}


$entityManager->flush();

?>