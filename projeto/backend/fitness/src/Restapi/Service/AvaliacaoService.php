<?php

namespace Restapi\Service;

use Restapi\Entity\Avaliacao as AvaliacaoEntity;
use Restapi\Repository\AvaliacaoRepository;
use Restapi\Repository\IRepository;
use Restapi\Entity\IEntity;

class AvaliacaoService extends AbstractService {

    public function populate(IEntity $entity, $data)
    {

        print_r($data);

        foreach ($data as $key => $value) {
            switch ($key) {
                case 'idCliente':
                case 'idProfissional':
                    if (is_numeric($value)) {
                        $data[$key] = $this->_em->getPartialReference('Restapi\Entity\Usuario', $value);
                    }
                    break;
                case 'idAgendamento':
                    if (is_numeric($value)) {
                        $data[$key] = $this->_em->getPartialReference('Restapi\Entity\Agendamento', $value);
                    }
                    break;
            }
        }

        $entity->populate($data);

        return $entity;
    }

    public function findBy($array) {
        return $this->getRepository()->findBy($array) ;
    }
}
