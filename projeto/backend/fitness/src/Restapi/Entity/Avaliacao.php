<?php

namespace Restapi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avaliacao
 *
 * @ORM\Table(name="avaliacao", indexes={@ORM\Index(name="fk_profissional3", columns={"id_profissional"}), @ORM\Index(name="fk_cliente3", columns={"id_cliente"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="\Restapi\Repository\AvaliacaoRepository")
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
     *   @ORM\JoinColumn(name="id_cliente", referencedColumnName="id_cliente")
     * })
     */
    private $idCliente;

    /**
     * @var \Restapi\Entity\Profissional
     *
     * @ORM\ManyToOne(targetEntity="Restapi\Entity\Profissional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_profissional", referencedColumnName="id_profissional")
     * })
     */
    private $idProfissional;



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
     * Set idCliente
     *
     * @param \Restapi\Entity\Cliente $idCliente
     *
     * @return Avaliacao
     */
    public function setIdCliente(\Restapi\Entity\Cliente $idCliente = null)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return \Restapi\Entity\Cliente
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set idProfissional
     *
     * @param \Restapi\Entity\Profissional $idProfissional
     *
     * @return Avaliacao
     */
    public function setIdProfissional(\Restapi\Entity\Profissional $idProfissional = null)
    {
        $this->idProfissional = $idProfissional;

        return $this;
    }

    /**
     * Get idProfissional
     *
     * @return \Restapi\Entity\Profissional
     */
    public function getIdProfissional()
    {
        return $this->idProfissional;
    }
}
