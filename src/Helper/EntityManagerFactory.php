<?php
namespace Alura\Doctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;



class EntityManagerFactory{
    /**
     * @return EntityManagerInterface
     * @throws \Doctrine\ORM\ORMException
     */

    public function getEntityManager():EntityManagerInterface   
    {
        $root = __DIR__."/../..";
        $confi = Setup::createAnnotationMetadataConfiguration([$root.'/src'],true);
        $connection =[
            'driver'=>'pdo_sqlite',
            'path'=> $root.'/var/data/banco.sqlite'];
            return EntityManager::create($connection,$confi);
    }

}
?>