<?php 
require __DIR__."/../vendor/autoload.php";

use Alura\Doctrine\Entity\Curso;
use Alura\Doctrine\Helper\EntityManagerFactory;

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

/**
 * 
 * @var Curso $cursoBuscado
 */
$cursoBuscado = $entityManager->find(Curso::class, $argv[1]);

echo "Nome do curso | {$cursoBuscado->getNome()} \n";




?>