<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 57ffbd948415822d134397699f69411b67bcf7bc
use Magento\Framework\App\Config\Storage\WriterInterface;
use Magento\Store\Api\StoreRepositoryInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\TestFramework\Helper\Bootstrap;

require __DIR__ . '/process_config_data.php';

$objectManager = Bootstrap::getObjectManager();

$configData = [
    'payment/payflowpro/partner',
    'payment/payflowpro/vendor',
    'payment/payflowpro/user',
    'payment/payflowpro/pwd',
];
/** @var WriterInterface $configWriter */
$configWriter = $objectManager->get(WriterInterface::class);

/** @var StoreRepositoryInterface $storeRepository */
$storeRepository = $objectManager->get(StoreRepositoryInterface::class);
$store = $storeRepository->get('test');
<<<<<<< HEAD
$deleteConfigData($configWriter, $configData, ScopeInterface::SCOPE_STORES, $store->getId());
=======
$deleteConfigData($configWriter, $configData, ScopeInterface::SCOPE_STORES, (int)$store->getId());
>>>>>>> 57ffbd948415822d134397699f69411b67bcf7bc
require __DIR__ . '/../../Store/_files/store_rollback.php';
