<?php

namespace Restapi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avaliacao
 *
 * @ORM\Table(name="avaliacao", indexes={@ORM\Index(name="fk_avaliacao_1_idx", columns={"id_agendamento"}), @ORM\Index(name="fk_profissional3", columns={"id_profissional"}), @ORM\Index(name="fk_avaliacao_2", columns={"id_cliente"})})
 * @ORM\Entity
 */
class Avaliacao extends AbstractEntity implements IEntity
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
     * @var integer
     *
     * @ORM\Column(name="ponto", type="integer", length=1, nullable=true)
     */
    private $ponto;

    /**
     * @var \Restapi\Entity\Agendamento
     *
     * @ORM\ManyToOne(targetEntity="Restapi\Entity\Agendamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_agendamento", referencedColumnName="id_agendamento")
     * })
     */
    private $idAgendamento;

    /**
     * @var \Restapi\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="Restapi\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cliente", referencedColumnName="id_usuario")
     * })
     */
    private $idCliente;

    /**
     * @var \Restapi\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="Restapi\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_profissional", referencedColumnName="id_usuario")
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
     * @param integer $ponto
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
     * @return integer
     */
    public function getPonto()
    {
        return $this->ponto;
    }

    /**
     * Set idAgendamento
     *
     * @param \Restapi\Entity\Agendamento $idAgendamento
     *
     * @return Avaliacao
     */
    public function setIdAgendamento(\Restapi\Entity\Agendamento $idAgendamento = null)
    {
        $this->idAgendamento = $idAgendamento;

        return $this;
    }

    /**
     * Get idAgendamento
     *
     * @return \Restapi\Entity\Agendamento
     */
    public function getIdAgendamento()
    {
        return $this->idAgendamento;
    }

    /**
     * Set idCliente
     *
     * @param \Restapi\Entity\Usuario $idCliente
     *
     * @return Avaliacao
     */
    public function setIdCliente(\Restapi\Entity\Usuario $idCliente = null)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return \Restapi\Entity\Usuario
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set idProfissional
     *
     * @param \Restapi\Entity\Usuario $idProfissional
     *
     * @return Avaliacao
     */
    public function setIdProfissional(\Restapi\Entity\Usuario $idProfissional = null)
    {
        $this->idProfissional = $idProfissional;

        return $this;
    }

    /**
     * Get idProfissional
     *
     * @return \Restapi\Entity\Usuario
     */
    public function getIdProfissional()
    {
        return $this->idProfissional;
    }
}
