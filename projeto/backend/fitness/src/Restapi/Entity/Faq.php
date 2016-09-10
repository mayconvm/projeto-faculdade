<?php

namespace Restapi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Faq
 *
 * @ORM\Table(name="faq")
 * @ORM\Entity
 */
class Faq
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_faq", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFaq;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=45, nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="pergunta_cliente_frequente", type="text", nullable=true)
     */
    private $perguntaClienteFrequente;



    /**
     * Get idFaq
     *
     * @return integer
     */
    public function getIdFaq()
    {
        return $this->idFaq;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Faq
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Faq
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set perguntaClienteFrequente
     *
     * @param string $perguntaClienteFrequente
     *
     * @return Faq
     */
    public function setPerguntaClienteFrequente($perguntaClienteFrequente)
    {
        $this->perguntaClienteFrequente = $perguntaClienteFrequente;

        return $this;
    }

    /**
     * Get perguntaClienteFrequente
     *
     * @return string
     */
    public function getPerguntaClienteFrequente()
    {
        return $this->perguntaClienteFrequente;
    }
}
