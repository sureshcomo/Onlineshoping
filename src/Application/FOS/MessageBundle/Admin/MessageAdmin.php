<?php

namespace Application\FOS\MessageBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class MessageAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('body')
            ->add('createdAt')
            ->add('id')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('body')
            ->add('createdAt')
            ->add('id')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
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
            ->add('body')
            ->add('createdAt')
            ->add('id')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('body')
            ->add('createdAt')
            ->add('id')
        ;
    }


//    protected function configureRoutes(RouteCollection $collection)
//    {
//        $collection->add('message', $this->getRouterIdParameter().'/admin/message');
//    }

    public function getTemplate($name)
    {
        switch ($name) {
            case 'list':
                return 'ApplicationFOSMessageBundle:Messages:list.html.twig';
                break;

            default:
                return parent::getTemplate($name);
                break;
        }
    }
}
