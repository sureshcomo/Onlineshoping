<?php

namespace Application\FOS\MessageBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Show\ShowMapper;

class ThreadAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('subject')
            ->add('createdAt')
            ->add('isSpam')
            ->add('id')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('subject')
            ->add('createdAt')
            ->add('isSpam')
            ->add('id')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                    'inboxAdmin'=>array('template' => "ApplicationFOSMessageBundle:indexAdmin:layout.html.twig"),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('subject')
            ->add('createdAt')
            ->add('isSpam')
            ->add('id')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('subject')
            ->add('createdAt')
            ->add('isSpam')
            ->add('id')
        ;
    }

    protected function configureRoutes(RouteCollection $collection) {
        $collection->add('inboxAdmin', $this->getRouterIdParameter() . '/admin/message');
    }

//    protected function configureListFields(ListMapper $listMapper) {
//        $listMapper
//            ->add('_action', 'actions', array(
//                'actions' => array(
//                    ''action_name' => array('template' => YourBundle:action_name':your_template.html.twig'),
//                    )
//                ))
//        ;
//    }
}
