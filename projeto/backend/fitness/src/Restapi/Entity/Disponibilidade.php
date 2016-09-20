<?php

namespace Restapi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disponibilidade
 *
 * @ORM\Table(name="disponibilidade")
 * @ORM\Entity
 */
class Disponibilidade
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iddisponibilidade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddisponibilidade;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dia", type="date", nullable=true)
     */
    private $dia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora", type="time", nullable=true)
     */
    private $hora;



    /**
     * Get iddisponibilidade
     *
     * @return integer
     */
    public function getIddisponibilidade()
    {
        return $this->iddisponibilidade;
    }

    /**
     * Set dia
     *
     * @param \DateTime $dia
     *
     * @return Disponibilidade
     */
    public function setDia($dia)
    {
        $this->dia = $dia;

        return $this;
    }

    /**
     * Get dia
     *
     * @return \DateTime
     */
    public function getDia()
    {
        return $this->dia;
    }

    /**
     * Set hora
     *
     * @param \DateTime $hora
     *
     * @return Disponibilidade
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return \DateTime
     */
    public function getHora()
    {
        return $this->hora;
    }
}
