<?php
/**
 * Created by JetBrains PhpStorm.
 * User: suresh
 * Date: 23/01/14
 * Time: 12:09
 * To change this template use File | Settings | File Templates.
 */

namespace Application\FOS\MessageBundle\Controller;

use FOS\MessageBundle\Controller\MessageController as Controller;
use Symfony\Component\HttpFoundation\Response;

class MessageController extends Controller {

    public function getUnreadMessagesCountAction(){
        $provider = $this->container->get('fos_message.provider');
        $count = $provider->getNbUnreadMessages();

        print_r("Count = "+ $count);
        return new Response();
    }
}