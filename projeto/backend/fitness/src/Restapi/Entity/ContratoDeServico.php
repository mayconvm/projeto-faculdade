<?php

namespace Restapi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContratoDeServico
 *
 * @ORM\Table(name="contrato_de_servico", uniqueConstraints={@ORM\UniqueConstraint(name="cod_local_UNIQUE", columns={"cod_local"})}, indexes={@ORM\Index(name="fk_profissional_idx", columns={"cod_profissional"}), @ORM\Index(name="fk_cliente_idx", columns={"cod_cliente"}), @ORM\Index(name="fk_local_idx", columns={"cod_local"})})
 * @ORM\Entity
 */
class ContratoDeServico
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
     * @var \DateTime
     *
     * @ORM\Column(name="duracao_aula", type="datetime", nullable=true)
     */
    private $duracaoAula;

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
     * @var string
     *
     * @ORM\Column(name="descricao_atividades", type="text", nullable=true)
     */
    private $descricaoAtividades;

    /**
     * @var string
     *
     * @ORM\Column(name="regras_personline", type="string", length=45, nullable=true)
     */
    private $regrasPersonline;

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
     * @var \Restapi\Entity\DefinirLocalidade
     *
     * @ORM\ManyToOne(targetEntity="Restapi\Entity\DefinirLocalidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_local", referencedColumnName="id_local_definido")
     * })
     */
    private $codLocal;

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
     * Get idContrato
     *
     * @return integer
     */
    public function getIdContrato()
    {
        return $this->idContrato;
    }

    /**
     * Set dataHora
     *
     * @param \DateTime $dataHora
     *
     * @return ContratoDeServico
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
     * @return integer
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set duracaoAula
     *
     * @param \DateTime $duracaoAula
     *
     * @return ContratoDeServico
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
     * Set descricaoAtividades
     *
     * @param string $descricaoAtividades
     *
     * @return ContratoDeServico
     */
    public function setDescricaoAtividades($descricaoAtividades)
    {
        $this->descricaoAtividades = $descricaoAtividades;

        return $this;
    }

    /**
     * Get descricaoAtividades
     *
     * @return string
     */
    public function getDescricaoAtividades()
    {
        return $this->descricaoAtividades;
    }

    /**
     * Set regrasPersonline
     *
     * @param string $regrasPersonline
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
     * @return string
     */
    public function getRegrasPersonline()
    {
        return $this->regrasPersonline;
    }

    /**
     * Set codCliente
     *
     * @param \Restapi\Entity\Cliente $codCliente
     *
     * @return ContratoDeServico
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
     * Set codLocal
     *
     * @param \Restapi\Entity\DefinirLocalidade $codLocal
     *
     * @return ContratoDeServico
     */
    public function setCodLocal(\Restapi\Entity\DefinirLocalidade $codLocal = null)
    {
        $this->codLocal = $codLocal;

        return $this;
    }

    /**
     * Get codLocal
     *
     * @return \Restapi\Entity\DefinirLocalidade
     */
    public function getCodLocal()
    {
        return $this->codLocal;
    }

    /**
     * Set codProfissional
     *
     * @param \Restapi\Entity\Profissional $codProfissional
     *
     * @return ContratoDeServico
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
