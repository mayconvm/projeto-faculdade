<?php

namespace Restapi\Repository;

use Doctrine\ORM\EntityRepository;

class AgendamentoRepository extends EntityRepository
{
    public function personalizado() {
        echo "Método personalizado.";
    }
}
