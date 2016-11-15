<?php

namespace Restapi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agendamento
 *
 * @ORM\Table(name="agendamento", uniqueConstraints={@ORM\UniqueConstraint(name="idAgendamento_UNIQUE", columns={"id_agendamento"})}, indexes={@ORM\Index(name="fk_profissional_idx", columns={"id_profissional"}), @ORM\Index(name="fk_cliente_idx", columns={"id_cliente"}), @ORM\Index(name="fk_agendamento_1_idx", columns={"local"})})
 * @ORM\Entity
 */
class Agendamento extends AbstractEntity implements IEntity
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
     * @var \DateTime
     *
     * @ORM\Column(name="data_hora", type="datetime", nullable=true)
     */
    private $dataHora;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="especialidade", type="text", nullable=true)
     */
    private $especialidade;

    /**
     * @var integer
     *
     * @ORM\Column(name="duracao_aula", type="integer", nullable=true)
     */
    private $duracaoAula;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = 1;

    /**
     * @var \Restapi\Entity\Localidade
     *
     * @ORM\ManyToOne(targetEntity="Restapi\Entity\Localidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="local", referencedColumnName="id_local_definido")
     * })
     */
    private $local;

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
     * Get idAgendamento
     *
     * @return integer
     */
    public function getIdAgendamento()
    {
        return $this->idAgendamento;
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
     * @param string $valor
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
     * @return string
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
     * @param integer $duracaoAula
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
     * @return integer
     */
    public function getDuracaoAula()
    {
        return $this->duracaoAula;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Agendamento
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set local
     *
     * @param \Restapi\Entity\Localidade $local
     *
     * @return Agendamento
     */
    public function setLocal(\Restapi\Entity\Localidade $local = null)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return \Restapi\Entity\Localidade
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set idCliente
     *
     * @param \Restapi\Entity\Usuario $idCliente
     *
     * @return Agendamento
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
     * @return Agendamento
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
