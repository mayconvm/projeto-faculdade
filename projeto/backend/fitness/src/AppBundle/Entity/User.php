<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AppBundle/Entity/User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class AppBundle/Entity/User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=222, nullable=true)
     */
    private $nome;


}

