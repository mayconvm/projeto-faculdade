<?php

namespace Restapi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agendamento
 *
 * @ORM\Table(name="agendamento", uniqueConstraints={@ORM\UniqueConstraint(name="idAgendamento_UNIQUE", columns={"id_agendamento"})}, indexes={@ORM\Index(name="fk_profissional_idx", columns={"id_profissional"}), @ORM\Index(name="fk_cliente_idx", columns={"id_cliente"})})
 * @ORM\Entity
 */
class Agendamento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_agendamento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAgendamento;

    /**
     * @var string
     *
     * @ORM\Column(name="local", type="string", length=45, nullable=true)
     */
    private $local;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_hora", type="datetime", nullable=true)
     */
    private $dataHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="valor", type="integer", nullable=true)
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="especialidade", type="text", nullable=true)
     */
    private $especialidade;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="duracao_aula", type="datetime", nullable=true)
     */
    private $duracaoAula;

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
     * Get idAgendamento
     *
     * @return integer
     */
    public function getIdAgendamento()
    {
        return $this->idAgendamento;
    }

    /**
     * Set local
     *
     * @param string $local
     *
     * @return Agendamento
     */
    public function setLocal($local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return string
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set dataHora
     *
     * @param \DateTime $dataHora
     *
     * @return Agendamento
     */
    public function setDataHora($dataHora)
    {
        $this->dataHora = $dataHora;

        return $this;
    }

    /**
     * Get dataHora
     *
     * @return \DateTime
     */
    public function getDataHora()
    {
        return $this->dataHora;
    }

    /**
     * Set valor
     *
     * @param integer $valor
     *
     * @return Agendamento
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return integer
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set especialidade
     *
     * @param string $especialidade
     *
     * @return Agendamento
     */
    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;

        return $this;
    }

    /**
     * Get especialidade
     *
     * @return string
     */
    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    /**
     * Set duracaoAula
     *
     * @param \DateTime $duracaoAula
     *
     * @return Agendamento
     */
    public function setDuracaoAula($duracaoAula)
    {
        $this->duracaoAula = $duracaoAula;

        return $this;
    }

    /**
     * Get duracaoAula
     *
     * @return \DateTime
     */
    public function getDuracaoAula()
    {
        return $this->duracaoAula;
    }

    /**
     * Set idCliente
     *
     * @param \Restapi\Entity\Cliente $idCliente
     *
     * @return Agendamento
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
     * @return Agendamento
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
