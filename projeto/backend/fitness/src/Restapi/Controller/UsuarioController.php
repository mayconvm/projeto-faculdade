<?php

namespace Restapi\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\Controller\FOSRestController;
use Restapi\Entity\IEntity;

/**
 * @RouteResource("Usuario")
 */
class UsuarioController extends FOSRestController
{
    private function getService() {
        return $this->get("usuarioService");
    }

    /**
     * [GET] /<Controller>.
     *
     */
    public function cgetAction(Request $request) {
        $service = $this->getService();

        $method = 'getAll';

        $queryString = $request->query->all();
        if (!empty($queryString)) {
            $method = 'findBy';
        }

        return $this->handleView($this->view($service->$method($queryString), 200));
    }

    /**
     * [GET] /<Controller>/{slug}.
     *
     * @param $slug
     */
    public function getAction($slug)
    {
        $service = $this->getService();

        return $this->handleView($this->view($service->getId($slug), 200));
    }

    /**
     * [POST] /<Controller>.
     */
    public function postAction(Request $request)
    {
        $service = $this->getService();

        // print_r(($request));

        $dataPost = $request->request->all();
        $entity = $service->newEntity($dataPost);

        return $this->handleView($this->view($service->persistEntity($entity), 200));
    }

    /**
     * [PUT] /<Controller>/{slug}.
     *
     *
     * @param $slug
     */
    public function putAction(Request $request, $slug)
    {
        $service = $this->getService();
        $entity = $service->getId($slug);
        
        if ($entity) {
            $dataPost = $request->request->all();

            // limpa alguns dados desnecessários
            unset($dataPost['dataCadastro']);

            // print_r($dataPost);
            $entity = $service->populate($entity, $dataPost);
        }

        return $this->handleView($this->view($service->persistEntity($entity), 200));
    }

    /**
     * [DELETE] /<Controller>/{slug}.
     *
     * @param $slug
     */
    public function deleteAction(Request $request, $slug)
    {
        $service = $this->getService();
        $entity = $service->getId($slug);

        if ($entity) {
            // delete
            $service->delete($entity);
        
            return $this->handleView($this->view(["status" => 1], 200));
        }

        return $this->handleView($this->view(["status" => 0], 403));
    }
}
