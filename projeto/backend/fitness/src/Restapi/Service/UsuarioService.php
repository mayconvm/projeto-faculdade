<?php

namespace Restapi\Service;

use Restapi\Entity\Avaliacao as AvaliacaoEntity;
use Restapi\Repository\AvaliacaoRepository;
use Restapi\Repository\IRepository;
use Restapi\Entity\IEntity;
use Restapi\Entity\Profissional as EntityProfissional;
use Restapi\Entity\Cliente as EntityCliente;

class UsuarioService extends AbstractService {

    private static $Profissional = 2;
    
    private static $Cliente = 1;


    public function populate(IEntity $entity, $data)
    {
        if (isset($data['type'])) {
            if ($data['type'] == self::$Profissional) {
                $data['codProfissional'] = new EntityProfissional($data);
            } else if ($data['type'] == self::$Cliente) {
                $data['codCliente'] = new EntityCliente($data);
            }
        }

        foreach ($data as $key => $value) {
            switch ($key) {
                case 'data_nascimento':
                    if (!empty($value)) {
                        $data[$key] = \DateTime::createFromFormat('Y-m-d', $value);
                    }
                    break;
            }
        }

        $entity->populate($data);

        // print_r($entity);
        // print_r($data);
        // exit("400");

        return $entity;
    }

    public function findBy($array) {
        return $this->getRepository()->findBy($array) ;
    }
}
