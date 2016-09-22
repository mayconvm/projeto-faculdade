<?php

namespace Restapi\Service;

use Restapi\Entity\Avaliacao as AvaliacaoEntity;
use Restapi\Repository\AvaliacaoRepository;
use Restapi\Repository\IRepository;
use Restapi\Entity\IEntity;

class AgendamentoService extends AbstractService {

    public function populate(IEntity $entity, $data)
    {

        foreach ($data as $key => $value) {
            switch ($key) {
                case 'idCliente':
                    if (is_numeric($value)) {
                        $data[$key] = $this->_em->getPartialReference('Restapi\Entity\Cliente', $value);
                    }
                    break;
                case 'idProfissional':
                    if (is_numeric($value)) {
                        $data[$key] = $this->_em->getPartialReference('Restapi\Entity\Profissional', $value);
                    }
                    break;
            }
        }

        $entity->populate($data);

        return $entity;
    }


}
