<?php
/**
 * This file is part of Bengkel
 *
 * (c) Muhamad Surya Iksanudin<surya.kejawen@gmail.com>
 *
 * @author : Muhamad Surya Iksanudin
 **/
namespace AppBundle\Event\Listener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use AppBundle\Event\OrderEvent;
use AppBundle\AppEvent;

class OrderEventListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            AppEvent::ORDER_INITIALIZE => 'onOrderInitialize',
            AppEvent::ORDER_SUCCESS => 'onOrderSuccess',
            AppEvent::ORDER_COMPLETE => 'onOrderComplete',
        );
    }

    public function onOrderInitialize(OrderEvent $event)
    {

    }
}