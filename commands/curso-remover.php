<?php
use Alura\Doctrine\Helper\EntityManagerFactory;
use Alura\Doctrine\Entity\Curso;

require_once __DIR__.'/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$curso = $entityManager->getReference(Curso::class,$argv[1]);

$entityManager->remove($curso);
$entityManager->flush();

?>