<?php

namespace Restapi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profissional
 *
 * @ORM\Table(name="profissional", uniqueConstraints={@ORM\UniqueConstraint(name="idProfissional_UNIQUE", columns={"id_profissional"})})
 * @ORM\Entity
 */
class Profissional
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_profissional", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProfissional;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=45, nullable=true)
     */
    private $nome;

    /**
     * @var integer
     *
     * @ORM\Column(name="telefone", type="bigint", nullable=true)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="graduacao", type="text", length=16777215, nullable=true)
     */
    private $graduacao;

    /**
     * @var string
     *
     * @ORM\Column(name="anexo_graduacao", type="string", length=1, nullable=true)
     */
    private $anexoGraduacao;

    /**
     * @var string
     *
     * @ORM\Column(name="especialidades", type="text", nullable=true)
     */
    private $especialidades;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=80, nullable=true)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=20, nullable=true)
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
     * @var string
     *
     * @ORM\Column(name="disponibilidade", type="string", length=1, nullable=true)
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
     * @var string
     *
     * @ORM\Column(name="valor_hora_aula", type="string", length=20, nullable=true)
     */
    private $valorHoraAula;

    /**
     * @var float
     *
     * @ORM\Column(name="media_aval", type="float", precision=10, scale=0, nullable=true)
     */
    private $mediaAval;



    /**
     * Get idProfissional
     *
     * @return integer
     */
    public function getIdProfissional()
    {
        return $this->idProfissional;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Profissional
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
     * Set telefone
     *
     * @param integer $telefone
     *
     * @return Profissional
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
     * Set email
     *
     * @param string $email
     *
     * @return Profissional
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
     * Set graduacao
     *
     * @param string $graduacao
     *
     * @return Profissional
     */
    public function setGraduacao($graduacao)
    {
        $this->graduacao = $graduacao;

        return $this;
    }

    /**
     * Get graduacao
     *
     * @return string
     */
    public function getGraduacao()
    {
        return $this->graduacao;
    }

    /**
     * Set anexoGraduacao
     *
     * @param string $anexoGraduacao
     *
     * @return Profissional
     */
    public function setAnexoGraduacao($anexoGraduacao)
    {
        $this->anexoGraduacao = $anexoGraduacao;

        return $this;
    }

    /**
     * Get anexoGraduacao
     *
     * @return string
     */
    public function getAnexoGraduacao()
    {
        return $this->anexoGraduacao;
    }

    /**
     * Set especialidades
     *
     * @param string $especialidades
     *
     * @return Profissional
     */
    public function setEspecialidades($especialidades)
    {
        $this->especialidades = $especialidades;

        return $this;
    }

    /**
     * Get especialidades
     *
     * @return string
     */
    public function getEspecialidades()
    {
        return $this->especialidades;
    }

    /**
     * Set endereco
     *
     * @param string $endereco
     *
     * @return Profissional
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
     * @return Profissional
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
     * @return Profissional
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
     * @return Profissional
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
     * @return Profissional
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
     * @return Profissional
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
     * @return Profissional
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
     * @param string $disponibilidade
     *
     * @return Profissional
     */
    public function setDisponibilidade($disponibilidade)
    {
        $this->disponibilidade = $disponibilidade;

        return $this;
    }

    /**
     * Get disponibilidade
     *
     * @return string
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
     * @return Profissional
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
     * @return Profissional
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
     * @return Profissional
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
     * @return Profissional
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
     * Set valorHoraAula
     *
     * @param string $valorHoraAula
     *
     * @return Profissional
     */
    public function setValorHoraAula($valorHoraAula)
    {
        $this->valorHoraAula = $valorHoraAula;

        return $this;
    }

    /**
     * Get valorHoraAula
     *
     * @return string
     */
    public function getValorHoraAula()
    {
        return $this->valorHoraAula;
    }

    /**
     * Set mediaAval
     *
     * @param float $mediaAval
     *
     * @return Profissional
     */
    public function setMediaAval($mediaAval)
    {
        $this->mediaAval = $mediaAval;

        return $this;
    }

    /**
     * Get mediaAval
     *
     * @return float
     */
    public function getMediaAval()
    {
        return $this->mediaAval;
    }
}
