<?php

namespace Restapi\Service;

use Restapi\Entity\Avaliacao as AvaliacaoEntity;
use Restapi\Repository\AvaliacaoRepository;
use Restapi\Repository\IRepository;
use Restapi\Entity\IEntity;

class ContratoDeServicoService extends AbstractService {

    public function populate(IEntity $entity, $data)
    {

        foreach ($data as $key => $value) {
            switch ($key) {
                case 'codCliente':
                    if (is_numeric($value)) {
                        $data[$key] = $this->_em->getPartialReference('Restapi\Entity\Cliente', $value);
                    }
                    break;
                case 'codProfissional':
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
