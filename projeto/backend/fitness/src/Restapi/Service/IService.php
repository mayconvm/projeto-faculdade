<?php

namespace Restapi\Service;

use Restapi\Entity\IEntity;
use Restapi\Repository\IRepository;

interface IService {

    public function newEntity($data = null);

    public function persistEntity(IEntity $entity);

    public function delete(IEntity $entity);

    public function getId($id);

    public function getAll();

    public function getRepository();
}
