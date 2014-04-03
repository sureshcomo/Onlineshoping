<?php

namespace Application\FOS\MessageBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;

class MessageAdminController extends CRUDController
{
    public function newRouteAction()
    {
        // Here how to get the current object
        $id = $this->get('request')->get($this->admin->getIdParameter());
        $object = $this->admin->getObject($id);

        print_r($object);
        // Your code here
    }
}
