<?php

namespace Restapi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente")
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
     * @ORM\Column(name="anexo_avaliacao", type="string", length=1, nullable=true)
     */
    private $anexoAvaliacao;



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
}
