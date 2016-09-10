<?php

namespace Restapi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente", uniqueConstraints={@ORM\UniqueConstraint(name="idCliente_UNIQUE", columns={"id_cliente"})})
 * @ORM\Entity
 */
class Cliente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_cliente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=45, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="telefone", type="bigint", nullable=true)
     */
    private $telefone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_ultima_avaliacao", type="date", nullable=true)
     */
    private $dataUltimaAvaliacao;

    /**
     * @var string
     *
     * @ORM\Column(name="anexo_avaliacao", type="string", length=1, nullable=true)
     */
    private $anexoAvaliacao;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=80, nullable=true)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=30, nullable=true)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=20, nullable=true)
     */
    private $estado;

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
     * @var \DateTime
     *
     * @ORM\Column(name="disponibilidade", type="datetime", nullable=true)
     */
    private $disponibilidade;

    /**
     * @var float
     *
     * @ORM\Column(name="pagseguro", type="float", precision=10, scale=0, nullable=true)
     */
    private $pagseguro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_nascimento", type="date", nullable=true)
     */
    private $dataNascimento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_cadastro", type="datetime", nullable=true)
     */
    private $dataCadastro;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=1, nullable=true)
     */
    private $sexo;



    /**
     * Get idCliente
     *
     * @return integer
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Cliente
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
     * Set email
     *
     * @param string $email
     *
     * @return Cliente
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefone
     *
     * @param integer $telefone
     *
     * @return Cliente
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
     * Set dataUltimaAvaliacao
     *
     * @param \DateTime $dataUltimaAvaliacao
     *
     * @return Cliente
     */
    public function setDataUltimaAvaliacao($dataUltimaAvaliacao)
    {
        $this->dataUltimaAvaliacao = $dataUltimaAvaliacao;

        return $this;
    }

    /**
     * Get dataUltimaAvaliacao
     *
     * @return \DateTime
     */
    public function getDataUltimaAvaliacao()
    {
        return $this->dataUltimaAvaliacao;
    }

    /**
     * Set anexoAvaliacao
     *
     * @param string $anexoAvaliacao
     *
     * @return Cliente
     */
    public function setAnexoAvaliacao($anexoAvaliacao)
    {
        $this->anexoAvaliacao = $anexoAvaliacao;

        return $this;
    }

    /**
     * Get anexoAvaliacao
     *
     * @return string
     */
    public function getAnexoAvaliacao()
    {
        return $this->anexoAvaliacao;
    }

    /**
     * Set endereco
     *
     * @param string $endereco
     *
     * @return Cliente
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
     * @param string $cidade
     *
     * @return Cliente
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get cidade
     *
     * @return string
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Cliente
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
     * Set bairro
     *
     * @param string $bairro
     *
     * @return Cliente
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
     * @return Cliente
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
     * @return Cliente
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
     * @return Cliente
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
     * Set disponibilidade
     *
     * @param \DateTime $disponibilidade
     *
     * @return Cliente
     */
    public function setDisponibilidade($disponibilidade)
    {
        $this->disponibilidade = $disponibilidade;

        return $this;
    }

    /**
     * Get disponibilidade
     *
     * @return \DateTime
     */
    public function getDisponibilidade()
    {
        return $this->disponibilidade;
    }

    /**
     * Set pagseguro
     *
     * @param float $pagseguro
     *
     * @return Cliente
     */
    public function setPagseguro($pagseguro)
    {
        $this->pagseguro = $pagseguro;

        return $this;
    }

    /**
     * Get pagseguro
     *
     * @return float
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
     * @return Cliente
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
     * Set dataCadastro
     *
     * @param \DateTime $dataCadastro
     *
     * @return Cliente
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
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Cliente
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
}
