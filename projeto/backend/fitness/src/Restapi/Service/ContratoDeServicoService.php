<?php

namespace Restapi\Service;

use Restapi\Entity\Avaliacao as AvaliacaoEntity;
use Restapi\Repository\AvaliacaoRepository;
use Restapi\Repository\IRepository;
use Restapi\Entity\IEntity;

class ContratoDeServicoService extends AbstractService {

    public function populate(IEntity $entity, $data)
    {
        $date = $entity->getDataPagamento();

        foreach ($data as $key => $value) {
            switch ($key) {
                case 'idAgendamento':
                    if (is_numeric($value)) {
                        $data[$key] = $this->_em->getPartialReference('Restapi\Entity\Agendamento', $value);
                    }
                    break;
                case 'data_pagamento':
                    // set date
                    if (is_string($value)) {
                        $data['data_pagamento'] = \DateTime::createFromFormat("Y-m-d", trim($value));
                    }
            }
        }

        $entity->populate($data);

        return $entity;
    }

    public function findBy($array) {
        return $this->getRepository()->findBy($array) ;
    }
}
