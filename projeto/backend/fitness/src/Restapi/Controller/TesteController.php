<?php

namespace Restapi\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Restapi\Entity\IEntity;

/**
 * @RouteResource("Teste")
 */
class TesteController extends FOSRestController
{
    /**
     * [GET] /<Controller>.
     *
     */
    public function cgetAction() {
        $service = $this->get("avaliacaoService");

        return $this->handleView($this->view($service->getAll(), 200));
    }

    /**
     * [GET] /<Controller>/{slug}.
     *
     * @param $slug
     */
    public function getAction($slug)
    {
        $service = $this->get("avaliacaoService");

        return $this->handleView($this->view($service->getId($slug), 200));
    }

    /**
     * [POST] /<Controller>.
     */
    public function cpostAction(Request $request)
    {
        $service = $this->get("avaliacaoService");

        $dataPost = $request->request->all();
        $entity = $service->newEntity($dataPost);

        return $this->handleView($this->view($service->persistEntity($entity), 200));
    }

    /**
     * [PUT] /<Controller>/{slug}.
     *
     * @param $slug
     */
    public function putAction(Request $request, $slug)
    {
        $service = $this->get("avaliacaoService");
        $entity = $service->getId($slug);

        if ($entity) {
            $dataPost = $request->request->all();
            $entity = $service->populate($entity, $dataPost);
        }

        return $this->handleView($this->view($service->persistEntity($entity), 200));
    }

    /**
     * [DELETE] /<Controller>/{slug}.
     *
     * @param $slug
     */
    public function deleteAction($slug)
    {
        $service = $this->get("avaliacaoService");
        $entity = $service->getId($slug);

        if ($entity) {
            // delete
            $service->delete($entity);
    
            return $this->handleView($this->view(["status" => 1], 200));
        }

        return $this->handleView($this->view(["status" => 0], 403));
    }

    
}
