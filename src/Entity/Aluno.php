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
    /**
     * @OneToMany(targetEntity="Telefone",mappedBy="aluno")
     */
    private $telefones;
    
    public function __construct(){
      $this->telefones = new ArrayCollection();
      
    }

    public function getId() :int
    {
        return $this->id;
    }

    public function getNome() :string
    {
        return $this->nome;
    }
    
    public function getTelefones():Collection{
        return $this->telefones;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
    
    
    public function addTelefones(Telefone $telefone):self{
        $this->telefones->add($telefone);
        $telefone->setAluno($this);
        
        return $this;
    }
    
}

