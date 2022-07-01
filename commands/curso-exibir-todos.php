<?php 
use Alura\Doctrine\Helper\EntityManagerFactory;
use Alura\Doctrine\Entity\Curso;

require_once __DIR__.'/../vendor/autoload.php';

/**
 * 
 * @var Curso $curso
 */
$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$cursosRepository = $entityManager->getRepository(Curso::class);

$cursosBuscado = $cursosRepository->findAll();

foreach($cursosBuscado as $curso){
   echo "----------------- \n Id        | {$curso->getId()} \n Nome      | {$curso->getNome()}  \n";
}
echo "----------------- \n";

?>