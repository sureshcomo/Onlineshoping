<?php
/**
 * Created by JetBrains PhpStorm.
 * User: suresh
 * Date: 24/01/14
 * Time: 08:19
 * To change this template use File | Settings | File Templates.
 */

namespace Application\Sonata\NotificationBundle\Consumer;

use Sonata\NotificationBundle\Consumer\ConsumerEvent;
use Sonata\NotificationBundle\Consumer\ConsumerInterface;

class LoggerConsumer implements ConsumerInterface {

    protected $logger;

    protected $types = array(
        'emerg',
        'alert',
        'crit',
        'err',
        'warn',
        'notice',
        'info',
        'debug',
    );

    /**
     * @param \Symfony\Component\HttpKernel\Log\LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }


    /**
     * Process a ConsumerEvent
     *
     * @param ConsumerEvent $event
     * @throws InvalidParameterException
     */
    public function process(ConsumerEvent $event)
    {
        $message = $event->getMessage();

        if (!in_array($message->getValue('level'), $this->types)) {
            throw new InvalidParameterException();
        }

        call_user_func(array($this->logger, $message->getValue('level')), $message->getValue('message'));
    }
}