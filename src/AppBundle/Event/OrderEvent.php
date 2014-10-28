<?php
/**
 * This file is part of Bengkel
 *
 * (c) Muhamad Surya Iksanudin<surya.kejawen@gmail.com>
 *
 * @author : Muhamad Surya Iksanudin
 **/
namespace AppBundle\Event;

use AppBundle\Entity\Order;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class OrderEvent extends Event
{
    /**
     * @var Request
     **/
    public $request;

    /**
     * @var Response
     **/
    public $response;

    /**
     * @var Order
     **/
    public $order;

    /**
     * @param Order $order
     * @param Request $request
     * @param Response $response
     **/
    public function __construct(Order $order, Request $request, Response $response)
    {
        $this->order = $order;
        $this->request = $request;
        $this->response = $response;
    }

    /**
     * @param Order $order
     * @return $this
     **/
    public function setOrder(Order $order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @param Response $response
     * @return $this
     **/
    public function setResponse(Response $response)
    {
        $this->response = $response;

        return $this;
    }

    /**
     * @param Request $request
     * @return $this
     **/
    public function setRequest(Request $request)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * @return Order
     **/
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @return Response
     **/
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return Request
     **/
    public function getRequest()
    {
        return $this->request;
    }
}