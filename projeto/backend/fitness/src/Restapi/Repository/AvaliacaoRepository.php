<?php

namespace Restapi\Repository;

use Doctrine\ORM\EntityRepository;

class AvaliacaoRepository extends EntityRepository
{
    public function personalizado() {
        echo "Método personalizado.";
    }
}
