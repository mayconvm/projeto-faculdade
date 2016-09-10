<?php

namespace Restapi\Service;

use Restapi\Entity\IEntity;
use Restapi\Repository\IRepository;
use Doctrine\ORM\EntityManager;

abstract class AbstractService {

    protected $_em;

    protected $nameRepository;

    public function __construct(EntityManager $entityManager, $nameRepository) {
        $this->_em = $entityManager;
        $this->nameRepository = $nameRepository;
    }

    protected function getRepository() {
        return $this->_em->getRepository($this->nameRepository);
    }

    public function newEntity($data = null)
    {
        $entity = new $this->nameRepository();
        $this->populate($entity, $data);

        return $entity;
    }

    public function persistEntity(IEntity $entity)
    {
        $this->_em->persist($entity);
        $this->_em->flush();

        return $entity;
    }

    public function delete(IEntity $entity)
    {
        $this->_em->remove($entity);
        $this->_em->flush();
    }

    public function getId($id)
    {
        return $this->getRepository()->find($id);
    }

    public function getAll()
    {
        return $this->getRepository()->findAll();
    }

    public function populate(IEntity $entity, $data)
    {
        $entity->populate($data);

        return $entity;
    }
}
