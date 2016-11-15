<?php

namespace Restapi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profissional
 *
 * @ORM\Table(name="profissional", uniqueConstraints={@ORM\UniqueConstraint(name="idProfissional_UNIQUE", columns={"id_profissional"})})
 * @ORM\Entity
 */
class Profissional extends AbstractEntity implements IEntity
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
     * @ORM\Column(name="valor_hora_aula", type="string", length=20, nullable=true)
     */
    private $valorHoraAula;

    /**
     * @var float
     *
     * @ORM\Column(name="media_aval", type="float", precision=10, scale=0, nullable=true)
     */
    private $mediaAval;


    public function __construct($data = []) {
        $this->populate($data);
    }


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
