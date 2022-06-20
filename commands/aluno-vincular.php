<?php 
namespace Alura\Doctrine\commands;

require_once __DIR__."/../vendor/autoload.php";

use Alura\Doctrine\Helper\EntityManagerFactory;
use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Curso;
use Alura\Doctrine\Entity\Telefone;

$entityManagerFactory =new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$idAluno = $argv[1];
$idCurso = $argv[2];

/** @var Curso $curso */
$curso = $entityManager->find(Curso::class,$idCurso); //Está realizando a busca do curso já cadastrado para vincular com o aluno
/** @var Aluno $aluno */
$aluno = $entityManager->find(Aluno::class,$idAluno); //Está realizando a busca do aluno já cadastrado para vincular com o curso

$curso->addAluno($aluno);

$entityManager->flush();
?>