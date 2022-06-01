<?php
namespace Alura\Doctrine\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 *  
 * @Entity
 *
 */
class Aluno
{
    /**
     * @Id
     * @GeneratedValue
     * @Column (type="integer")
     */
    private $id;
    /** 
     * 
     * @Column (type="string")
     */
    private $nome;
    
    public function __construct(){
      
    }

    public function getId() :int
    {
        return $this->id;
    }

    public function getNome() :string
    {
        return $this->nome;
    }

    public function setId(int $id) 
    {
        $this->id = $id;
    }

    public function setNome(string $nome) 
    {
        $this->nome = $nome;
    }

}

