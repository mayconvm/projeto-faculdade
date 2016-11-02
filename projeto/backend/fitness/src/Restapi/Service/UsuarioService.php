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
                $data['codProfissional'] = new EntityProfissional();
            } else if ($data['type'] == self::$Cliente) {
                $data['codCliente'] = new EntityCliente();
            }
        }

        foreach ($data as $key => $value) {
            switch ($key) {
                case 'data_nascimento':
                    if (!empty($value)) {
                        $data[$key] = \DateTime::createFromFormat('d/m/Y', $value);
                    }
                    break;
            }
        }

        $entity->populate($data);

        return $entity;
    }


}
