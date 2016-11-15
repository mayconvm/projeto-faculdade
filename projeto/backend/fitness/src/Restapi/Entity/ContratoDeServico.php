<?php

namespace Restapi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContratoDeServico
 *
 * @ORM\Table(name="contrato_de_servico", uniqueConstraints={@ORM\UniqueConstraint(name="id_agendamento_UNIQUE", columns={"id_agendamento"})})
 * @ORM\Entity
 */
class ContratoDeServico extends AbstractEntity implements IEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_contrato", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContrato;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=10, scale=2, nullable=true)
     */
    private $valor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_pagamento", type="datetime", nullable=true)
     */
    private $dataPagamento;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_pagamento", type="string", length=30, nullable=true)
     */
    private $tipoPagamento;

    /**
     * @var integer
     *
     * @ORM\Column(name="regras_personline", type="integer", nullable=true)
     */
    private $regrasPersonline;

    /**
     * @var integer
     *
     * @ORM\Column(name="status_pay", type="integer", nullable=true)
     */
    private $statusPay;

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
     * Get idContrato
     *
     * @return integer
     */
    public function getIdContrato()
    {
        return $this->idContrato;
    }

    /**
     * Set valor
     *
     * @param float $valor
     *
     * @return ContratoDeServico
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return float
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set dataPagamento
     *
     * @param \DateTime $dataPagamento
     *
     * @return ContratoDeServico
     */
    public function setDataPagamento($dataPagamento)
    {
        $this->dataPagamento = $dataPagamento;

        return $this;
    }

    /**
     * Get dataPagamento
     *
     * @return \DateTime
     */
    public function getDataPagamento()
    {
        return $this->dataPagamento;
    }

    /**
     * Set tipoPagamento
     *
     * @param string $tipoPagamento
     *
     * @return ContratoDeServico
     */
    public function setTipoPagamento($tipoPagamento)
    {
        $this->tipoPagamento = $tipoPagamento;

        return $this;
    }

    /**
     * Get tipoPagamento
     *
     * @return string
     */
    public function getTipoPagamento()
    {
        return $this->tipoPagamento;
    }

    /**
     * Set regrasPersonline
     *
     * @param integer $regrasPersonline
     *
     * @return ContratoDeServico
     */
    public function setRegrasPersonline($regrasPersonline)
    {
        $this->regrasPersonline = $regrasPersonline;

        return $this;
    }

    /**
     * Get regrasPersonline
     *
     * @return integer
     */
    public function getRegrasPersonline()
    {
        return $this->regrasPersonline;
    }

    /**
     * Set statusPay
     *
     * @param integer $statusPay
     *
     * @return ContratoDeServico
     */
    public function setStatusPay($statusPay)
    {
        $this->statusPay = $statusPay;

        return $this;
    }

    /**
     * Get statusPay
     *
     * @return integer
     */
    public function getStatusPay()
    {
        return $this->statusPay;
    }

    /**
     * Set idAgendamento
     *
     * @param \Restapi\Entity\Agendamento $idAgendamento
     *
     * @return ContratoDeServico
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
}
