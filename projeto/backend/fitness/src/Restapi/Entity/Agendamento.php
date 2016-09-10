<?php

namespace Restapi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agendamento
 *
 * @ORM\Table(name="agendamento", uniqueConstraints={@ORM\UniqueConstraint(name="idAgendamento_UNIQUE", columns={"id_agendamento"}), @ORM\UniqueConstraint(name="cod_profissional_UNIQUE", columns={"cod_profissional"}), @ORM\UniqueConstraint(name="cod_cliente_UNIQUE", columns={"cod_cliente"})}, indexes={@ORM\Index(name="fk_profissional_idx", columns={"cod_profissional"}), @ORM\Index(name="fk_cliente_idx", columns={"cod_cliente"})})
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
     * Set codCliente
     *
     * @param \Restapi\Entity\Cliente $codCliente
     *
     * @return Agendamento
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
     * @return Agendamento
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
