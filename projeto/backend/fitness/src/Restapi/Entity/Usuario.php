<?php

namespace Restapi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", indexes={@ORM\Index(name="fk_disponibilidade_idx", columns={"cod_disponibilidade"}), @ORM\Index(name="fk_profissional4_idx", columns={"cod_profissional"}), @ORM\Index(name="fk_cliente4_idx", columns={"cod_cliente"})})
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idusuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=45, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=30, nullable=true)
     */
    private $endereco;

    /**
     * @var integer
     *
     * @ORM\Column(name="cidade", type="integer", nullable=true)
     */
    private $cidade;

    /**
     * @var integer
     *
     * @ORM\Column(name="uf", type="integer", nullable=true)
     */
    private $uf;

    /**
     * @var integer
     *
     * @ORM\Column(name="telefone", type="bigint", nullable=true)
     */
    private $telefone;

    /**
     * @var integer
     *
     * @ORM\Column(name="bairro", type="integer", nullable=true)
     */
    private $bairro;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=9, nullable=true)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="complemento", type="string", length=20, nullable=true)
     */
    private $complemento;

    /**
     * @var string
     *
     * @ORM\Column(name="pagseguro", type="string", length=100, nullable=true)
     */
    private $pagseguro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_nascimento", type="date", nullable=true)
     */
    private $dataNascimento;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=1, nullable=true)
     */
    private $sexo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_cadastro", type="datetime", nullable=true)
     */
    private $dataCadastro;

    /**
     * @var string
     *
     * @ORM\Column(name="senha", type="string", length=45, nullable=true)
     */
    private $senha;

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
     * @var \Restapi\Entity\Disponibilidade
     *
     * @ORM\ManyToOne(targetEntity="Restapi\Entity\Disponibilidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_disponibilidade", referencedColumnName="iddisponibilidade")
     * })
     */
    private $codDisponibilidade;

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
     * Get idusuario
     *
     * @return integer
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Usuario
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
     * Set endereco
     *
     * @param string $endereco
     *
     * @return Usuario
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
     * Set cidade
     *
     * @param integer $cidade
     *
     * @return Usuario
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get cidade
     *
     * @return integer
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set uf
     *
     * @param integer $uf
     *
     * @return Usuario
     */
    public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Get uf
     *
     * @return integer
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set telefone
     *
     * @param integer $telefone
     *
     * @return Usuario
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
     * Set bairro
     *
     * @param integer $bairro
     *
     * @return Usuario
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get bairro
     *
     * @return integer
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
     * @return Usuario
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
     * @param string $cep
     *
     * @return Usuario
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep
     *
     * @return string
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
     * @return Usuario
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
     * Set pagseguro
     *
     * @param string $pagseguro
     *
     * @return Usuario
     */
    public function setPagseguro($pagseguro)
    {
        $this->pagseguro = $pagseguro;

        return $this;
    }

    /**
     * Get pagseguro
     *
     * @return string
     */
    public function getPagseguro()
    {
        return $this->pagseguro;
    }

    /**
     * Set dataNascimento
     *
     * @param \DateTime $dataNascimento
     *
     * @return Usuario
     */
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;

        return $this;
    }

    /**
     * Get dataNascimento
     *
     * @return \DateTime
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Usuario
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set dataCadastro
     *
     * @param \DateTime $dataCadastro
     *
     * @return Usuario
     */
    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;

        return $this;
    }

    /**
     * Get dataCadastro
     *
     * @return \DateTime
     */
    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }

    /**
     * Set senha
     *
     * @param string $senha
     *
     * @return Usuario
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get senha
     *
     * @return string
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set codCliente
     *
     * @param \Restapi\Entity\Cliente $codCliente
     *
     * @return Usuario
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
     * Set codDisponibilidade
     *
     * @param \Restapi\Entity\Disponibilidade $codDisponibilidade
     *
     * @return Usuario
     */
    public function setCodDisponibilidade(\Restapi\Entity\Disponibilidade $codDisponibilidade = null)
    {
        $this->codDisponibilidade = $codDisponibilidade;

        return $this;
    }

    /**
     * Get codDisponibilidade
     *
     * @return \Restapi\Entity\Disponibilidade
     */
    public function getCodDisponibilidade()
    {
        return $this->codDisponibilidade;
    }

    /**
     * Set codProfissional
     *
     * @param \Restapi\Entity\Profissional $codProfissional
     *
     * @return Usuario
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
