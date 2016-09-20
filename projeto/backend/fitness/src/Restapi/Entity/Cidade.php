<?php

namespace Restapi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cidade
 *
 * @ORM\Table(name="cidade", indexes={@ORM\Index(name="fk_estado_idx", columns={"cod_estado"})})
 * @ORM\Entity
 */
class Cidade
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcidade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcidade;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=45, nullable=true)
     */
    private $nome;

    /**
     * @var \Restapi\Entity\Estado
     *
     * @ORM\ManyToOne(targetEntity="Restapi\Entity\Estado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_estado", referencedColumnName="idestado")
     * })
     */
    private $codEstado;



    /**
     * Get idcidade
     *
     * @return integer
     */
    public function getIdcidade()
    {
        return $this->idcidade;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Cidade
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set codEstado
     *
     * @param \Restapi\Entity\Estado $codEstado
     *
     * @return Cidade
     */
    public function setCodEstado(\Restapi\Entity\Estado $codEstado = null)
    {
        $this->codEstado = $codEstado;

        return $this;
    }

    /**
     * Get codEstado
     *
     * @return \Restapi\Entity\Estado
     */
    public function getCodEstado()
    {
        return $this->codEstado;
    }
}
