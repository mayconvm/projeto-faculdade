<?php

namespace Restapi\Service;

use Restapi\Entity\Avaliacao as AvaliacaoEntity;
use Restapi\Repository\AvaliacaoRepository;
use Restapi\Repository\IRepository;
use Restapi\Entity\IEntity;

class LocalidadeService extends AbstractService {

    public function populate(IEntity $entity, $data)
    {
        $entity->populate($data);

        return $entity;
    }


}
