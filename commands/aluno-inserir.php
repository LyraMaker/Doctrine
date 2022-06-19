<?php
namespace Alura\Doctrine\commands;

require_once __DIR__."/../vendor/autoload.php";

use Alura\Doctrine\Helper\EntityManagerFactory;
use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;

$entityManagerFactory =new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$aluno = new Aluno();


$entityManager->persist($aluno);


$nome = $argv[1];

for($i = 2; $i <$argc; $i++){
    $telefone = new Telefone();
    
    $numero = $argv[$i];
    
    $telefone->setNumero($numero);
    $aluno->addTelefones($telefone);
}

$aluno->setNome($nome);

$entityManager->flush();

?>