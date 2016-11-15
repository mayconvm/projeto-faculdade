<?php

namespace Restapi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localidade
 *
 * @ORM\Table(name="localidade", uniqueConstraints={@ORM\UniqueConstraint(name="idlocal_definido_UNIQUE", columns={"id_local_definido"})}, indexes={@ORM\Index(name="fk_localidade_1_idx", columns={"estado"}), @ORM\Index(name="fk_localidade_2_idx", columns={"cidade"})})
 * @ORM\Entity
 */
class Localidade extends AbstractEntity implements IEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_local_definido", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLocalDefinido;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=80, nullable=true)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro", type="string", length=20, nullable=true)
     */
    private $bairro;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="cep", type="bigint", nullable=true)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="complemento", type="string", length=45, nullable=true)
     */
    private $complemento;

    /**
     * @var string
     *
     * @ORM\Column(name="equipamentos_disp_local", type="text", length=16777215, nullable=true)
     */
    private $equipamentosDispLocal;

    /**
     * @var string
     *
     * @ORM\Column(name="observacoes", type="text", nullable=true)
     */
    private $observacoes;

    /**
     * @var integer
     *
     * @ORM\Column(name="telefone", type="bigint", nullable=true)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="horario_funcionamento", type="string", length=200, nullable=true)
     */
    private $horarioFuncionamento;

    /**
     * @var \Restapi\Entity\Estado
     *
     * @ORM\ManyToOne(targetEntity="Restapi\Entity\Estado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado", referencedColumnName="idestado")
     * })
     */
    private $estado;

    /**
     * @var \Restapi\Entity\Cidade
     *
     * @ORM\ManyToOne(targetEntity="Restapi\Entity\Cidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cidade", referencedColumnName="idcidade")
     * })
     */
    private $cidade;



    /**
     * Get idLocalDefinido
     *
     * @return integer
     */
    public function getIdLocalDefinido()
    {
        return $this->idLocalDefinido;
    }

    /**
     * Set endereco
     *
     * @param string $endereco
     *
     * @return Localidade
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get endereco
     *
     * @return string
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set bairro
     *
     * @param string $bairro
     *
     * @return Localidade
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get bairro
     *
     * @return string
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return Localidade
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set cep
     *
     * @param integer $cep
     *
     * @return Localidade
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep
     *
     * @return integer
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set complemento
     *
     * @param string $complemento
     *
     * @return Localidade
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * Get complemento
     *
     * @return string
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * Set equipamentosDispLocal
     *
     * @param string $equipamentosDispLocal
     *
     * @return Localidade
     */
    public function setEquipamentosDispLocal($equipamentosDispLocal)
    {
        $this->equipamentosDispLocal = $equipamentosDispLocal;

        return $this;
    }

    /**
     * Get equipamentosDispLocal
     *
     * @return string
     */
    public function getEquipamentosDispLocal()
    {
        return $this->equipamentosDispLocal;
    }

    /**
     * Set observacoes
     *
     * @param string $observacoes
     *
     * @return Localidade
     */
    public function setObservacoes($observacoes)
    {
        $this->observacoes = $observacoes;

        return $this;
    }

    /**
     * Get observacoes
     *
     * @return string
     */
    public function getObservacoes()
    {
        return $this->observacoes;
    }

    /**
     * Set telefone
     *
     * @param integer $telefone
     *
     * @return Localidade
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get telefone
     *
     * @return integer
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set horarioFuncionamento
     *
     * @param string $horarioFuncionamento
     *
     * @return Localidade
     */
    public function setHorarioFuncionamento($horarioFuncionamento)
    {
        $this->horarioFuncionamento = $horarioFuncionamento;

        return $this;
    }

    /**
     * Get horarioFuncionamento
     *
     * @return string
     */
    public function getHorarioFuncionamento()
    {
        return $this->horarioFuncionamento;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Localidade
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set cidade
     *
     * @param \Restapi\Entity\Cidade $cidade
     *
     * @return Localidade
     */
    public function setCidade(\Restapi\Entity\Cidade $cidade = null)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get cidade
     *
     * @return \Restapi\Entity\Cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }
}
