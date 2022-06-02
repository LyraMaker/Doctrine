<?php
namespace Alura\Doctrine\commands;

require_once __DIR__."/../vendor/autoload.php";

use Alura\Doctrine\Helper\EntityManagerFactory;
use Alura\Doctrine\Entity\Aluno;

$entityManagerFactory =new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$aluno = new Aluno();
$entityManager->persist($aluno);

$nome = getopt('n:'); 


$aluno->setNome($nome['n']);

$entityManager->flush();

?>