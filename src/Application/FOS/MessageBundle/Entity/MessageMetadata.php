<?php
/**
 * Created by JetBrains PhpStorm.
 * User: suresh
 * Date: 23/01/14
 * Time: 10:43
 * To change this template use File | Settings | File Templates.
 */

namespace Application\FOS\MessageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\MessageBundle\Entity\MessageMetadata as BaseMessageMetadata;
use FOS\MessageBundle\Model\MessageInterface;
use FOS\MessageBundle\Model\ParticipantInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="oshop_messageMetadata")
 */
class MessageMetadata extends BaseMessageMetadata
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(
     *   targetEntity="Application\FOS\MessageBundle\Entity\Message",
     *   inversedBy="metadata"
     * )
     * @var MessageInterface
     */
    protected $message;

    /**
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User")
     * @var ParticipantInterface
     */
    protected $participant;
}