<?php
namespace Alura\Doctrine\Entity;

class Telefone
/**
 * @Entity
 */

{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;
    /**
     * @Column(type="string")
     */
    
    private $numero;
    public function getId():int
    {
        return $this->id;
    }

    public function getNumero():string
    {
        return $this->numero;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setNumero(string $numero)
    {
        $this->numero = $numero;
    }

}

