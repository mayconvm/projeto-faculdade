<?php

namespace Restapi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avaliacao
 *
 * @ORM\Table(name="avaliacao", indexes={@ORM\Index(name="fk_profissional3", columns={"cod_profissional"}), @ORM\Index(name="fk_cliente3", columns={"cod_cliente"})})
 * @ORM\Entity
 */
class Avaliacao
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_avaliacao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAvaliacao;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_aval", type="text", nullable=true)
     */
    private $descAval;

    /**
     * @var string
     *
     * @ORM\Column(name="ponto", type="string", length=1, nullable=true)
     */
    private $ponto;

    /**
     * @var \Restapi\Entity\Cliente
     *
     * @ORM\ManyToOne(targetEntity="Restapi\Entity\Cliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_cliente", referencedColumnName="id_cliente")
     * })
     */
    private $codCliente;

    /**
     * @var \Restapi\Entity\Profissional
     *
     * @ORM\ManyToOne(targetEntity="Restapi\Entity\Profissional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_profissional", referencedColumnName="id_profissional")
     * })
     */
    private $codProfissional;



    /**
     * Get idAvaliacao
     *
     * @return integer
     */
    public function getIdAvaliacao()
    {
        return $this->idAvaliacao;
    }

    /**
     * Set descAval
     *
     * @param string $descAval
     *
     * @return Avaliacao
     */
    public function setDescAval($descAval)
    {
        $this->descAval = $descAval;

        return $this;
    }

    /**
     * Get descAval
     *
     * @return string
     */
    public function getDescAval()
    {
        return $this->descAval;
    }

    /**
     * Set ponto
     *
     * @param string $ponto
     *
     * @return Avaliacao
     */
    public function setPonto($ponto)
    {
        $this->ponto = $ponto;

        return $this;
    }

    /**
     * Get ponto
     *
     * @return string
     */
    public function getPonto()
    {
        return $this->ponto;
    }

    /**
     * Set codCliente
     *
     * @param \Restapi\Entity\Cliente $codCliente
     *
     * @return Avaliacao
     */
    public function setCodCliente(\Restapi\Entity\Cliente $codCliente = null)
    {
        $this->codCliente = $codCliente;

        return $this;
    }

    /**
     * Get codCliente
     *
     * @return \Restapi\Entity\Cliente
     */
    public function getCodCliente()
    {
        return $this->codCliente;
    }

    /**
     * Set codProfissional
     *
     * @param \Restapi\Entity\Profissional $codProfissional
     *
     * @return Avaliacao
     */
    public function setCodProfissional(\Restapi\Entity\Profissional $codProfissional = null)
    {
        $this->codProfissional = $codProfissional;

        return $this;
    }

    /**
     * Get codProfissional
     *
     * @return \Restapi\Entity\Profissional
     */
    public function getCodProfissional()
    {
        return $this->codProfissional;
    }
}
