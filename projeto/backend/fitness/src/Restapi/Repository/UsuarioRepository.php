<?php

namespace Restapi\Repository;

use Doctrine\ORM\EntityRepository;

class UsuarioRepository extends EntityRepository
{
    public function personalizado() {
        echo "Método personalizado.";
    }
}
