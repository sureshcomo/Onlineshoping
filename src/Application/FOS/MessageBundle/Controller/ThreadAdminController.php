<?php

namespace Application\FOS\MessageBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\MessageBundle\Provider\ProviderInterface;
class ThreadAdminController extends ContainerAware
{
    public function inboxAdminAction(){
        $threads = $this->getProvider()->getInboxThreads();

        return $this->container->get('templating')->renderResponse('FOSMessageBundle:Message:inbox.html.twig', array(
            'threads' => $threads
        ));
    }
}
