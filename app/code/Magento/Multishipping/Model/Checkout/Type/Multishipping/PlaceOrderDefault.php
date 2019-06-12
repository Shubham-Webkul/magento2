<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 57ffbd948415822d134397699f69411b67bcf7bc
namespace Magento\Multishipping\Model\Checkout\Type\Multishipping;

use Magento\Sales\Api\OrderManagementInterface;

/**
 * Default implementation for OrderPlaceInterface.
 */
class PlaceOrderDefault implements PlaceOrderInterface
{
    /**
     * @var OrderManagementInterface
     */
    private $orderManagement;

    /**
     * @param OrderManagementInterface $orderManagement
     */
    public function __construct(
        OrderManagementInterface $orderManagement
    ) {
        $this->orderManagement = $orderManagement;
    }

    /**
     * {@inheritdoc}
     */
    public function place(array $orderList): array
    {
        $errorList = [];
        foreach ($orderList as $order) {
            try {
                $this->orderManagement->place($order);
            } catch (\Exception $e) {
                $incrementId = $order->getIncrementId();
                $errorList[$incrementId] = $e;
            }
        }

        return $errorList;
    }
}
