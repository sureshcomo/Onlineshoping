<?php
/**
 * Created by JetBrains PhpStorm.
 * User: suresh
 * Date: 24/01/14
 * Time: 14:32
 * To change this template use File | Settings | File Templates.
 */

namespace Application\FOS\MessageBundle\Block;

use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Validator\ErrorElement;

use Sonata\BlockBundle\Block\BlockServiceInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\HttpFoundation\Response;
use Sonata\BlockBundle\Block\BaseBlockService;
use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\BlockBundle\Block\BlockContextInterface;
class MessageBlockService extends BaseBlockService
{
    public function getName()
    {
        return 'My messages';
    }

    public function getDefaultSettings()
    {
        return array();
    }

    public function validateBlock(ErrorElement $errorElement, BlockInterface $block)
    {
    }

    public function buildEditForm(FormMapper $formMapper, BlockInterface $block)
    {
    }

    public function execute(BlockContextInterface $blockContext, Response $response = null)
    {
        $block = $blockContext->getBlock();

        if (!$block->getEnabled()) {
            return new Response();
        }

        $settings = array_merge($this->getDefaultSettings(), $block->getSettings());

        return $this->renderResponse('ApplicationFOSMessageBundle::layout.html.twig', array(
            'block'     => $blockContext->getBlock(),
            'settings'  => $settings
        ), $response);
    }
}