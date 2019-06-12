<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Framework\Mail\Template;

use Magento\Framework\Mail\MessageInterface;

<<<<<<< HEAD
=======
/**
 * Class TransportBuilderByStore
 *
 * @deprecated The ability to set From address based on store is now available
 * in the \Magento\Framework\Mail\Template\TransportBuilder class
 * @see \Magento\Framework\Mail\Template\TransportBuilder::setFromByStore
 */
>>>>>>> 57ffbd948415822d134397699f69411b67bcf7bc
class TransportBuilderByStore
{
    /**
     * Message.
     *
     * @var \Magento\Framework\Mail\Message
     */
    protected $message;

    /**
     * Sender resolver.
     *
     * @var \Magento\Framework\Mail\Template\SenderResolverInterface
     */
    private $senderResolver;

    /**
     * @param MessageInterface $message
     * @param SenderResolverInterface $senderResolver
     */
    public function __construct(
        MessageInterface $message,
        SenderResolverInterface $senderResolver
    ) {
        $this->message = $message;
        $this->senderResolver = $senderResolver;
    }

    /**
     * Set mail from address by store.
     *
     * @param string|array $from
     * @param string|int $store
     *
     * @return $this
     */
    public function setFromByStore($from, $store)
    {
        $result = $this->senderResolver->resolve($from, $store);
<<<<<<< HEAD
        $this->message->setFrom($result['email'], $result['name']);
=======
        $this->message->setFromAddress($result['email'], $result['name']);
>>>>>>> 57ffbd948415822d134397699f69411b67bcf7bc

        return $this;
    }
}
