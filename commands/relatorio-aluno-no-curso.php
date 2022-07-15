<?php 
use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Curso;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;
use Doctrine\DBAL\Logging\DebugStack;


require_once __DIR__.'/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunosRepository = $entityManager->getRepository(Aluno::class); 

$debugStack = new DebugStack();
$entityManager->getConfiguration()->setSQLLogger($debugStack);


/**
 * 
 * @var Aluno[] $alunos
 * @var Curso[] $cursos 
 */
$alunos = $alunosRepository->findAll();

foreach ($alunos as $aluno){
    $telefones = $aluno->getTelefones()
    ->map(function(Telefone $telefone){
        return $telefone->getNumero();
    })
    ->toArray();
    
    $cursos = $aluno->getCursos()
    ->map(function(Curso $cursos){
        return $cursos->getNome();
    })
    ->toArray();
    
    echo "_________________________\n";
    echo "------------------------- \n";
    echo "| ID: {$aluno->getId()} | \n";
    echo "------------------------- \n";
    echo "Nome: {$aluno->getNome()}\n";
    echo "Telefones: ".implode(" | ",$telefones)."\n \n";
    echo "\t | Cursos \n \t | ".implode(" \n \t | ",$cursos)."\n";
    echo "_________________________\n";

}

print_r($debugStack);

?>