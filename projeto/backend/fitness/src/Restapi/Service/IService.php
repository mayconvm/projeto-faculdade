<?php

namespace Restapi\Service;

use Restapi\Entity\IEntity;
use Restapi\Repository\IRepository;

interface IService {

    public function newEntity($data = null);

    public function insertEntity();

    public function update(IEntity $entity);

    public function delete(IEntity $entity);

    public function getId($id);

    public function getAll();

    public function getRepository();
    
    public function setRepository(IRepository $repository);
}
