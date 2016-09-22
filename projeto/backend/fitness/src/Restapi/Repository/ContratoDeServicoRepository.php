<?php

namespace Restapi\Repository;

use Doctrine\ORM\EntityRepository;

class ContratoDeServicoRepository extends EntityRepository
{
    public function personalizado() {
        echo "Método personalizado.";
    }
}
