<?php

namespace Restapi\Service;

use Restapi\Entity\Avaliacao as AvaliacaoEntity;
use Restapi\Repository\AvaliacaoRepository;
use Restapi\Repository\IRepository;
use Restapi\Entity\IEntity;

class AgendamentoService extends AbstractService {

    public function populate(IEntity $entity, $data)
    {
        $date = $entity->getDataHora();


        foreach ($data as $key => $value) {
            switch ($key) {
                case 'idCliente':
                    if (!empty($value)) {
                        $data[$key] = $this->_em->getPartialReference('Restapi\Entity\Usuario', $value);
                    }
                    break;
                case 'idProfissional':
                    if (!empty($value)) {
                        $data[$key] = $this->_em->getPartialReference('Restapi\Entity\Usuario', $value);
                    }
                    break;
                case 'local':
                    if (!empty($value)) {
                        $data[$key] = $this->_em->getPartialReference('Restapi\Entity\Localidade', $value);
                    }
                    break;
                case 'data':
                case 'hora':
                    if ($value){
                        $date .= " " . $value;
                    }
            }
        }

        // set date
        if (is_string($date)) {
            $data['data_hora'] = \DateTime::createFromFormat("Y-m-d h:i", trim($date));
        }

        $entity->populate($data);

        return $entity;
    }
}
