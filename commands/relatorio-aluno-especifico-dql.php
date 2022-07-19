<?php 
use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Curso;
use Alura\Doctrine\Helper\EntityManagerFactory;
use Doctrine\DBAL\Logging\DebugStack;

require_once __DIR__.'/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$debugStack = new DebugStack();
$entityManager->getConfiguration()->setSQLLogger($debugStack);

$valorId = $argv[1];

$Aluno = Aluno::class;
$dql = "SELECT a from $Aluno a where a.id = $valorId";
$query = $entityManager->createQuery($dql);

$result = $query->getResult();

/**
 * @var Aluno $result
 */

foreach ($result as $aluno){
    echo "Nome: {$aluno->getNome()} \n \n";
    $cursos = $aluno
        ->getCursos()
        ->map(function (Curso $cursos){
            return $cursos->getNome();
        })
        ->toArray();
        echo "Cadastrado nos Cursos de: \n \t |".implode("\n \t |",$cursos)."\n";
}



?>