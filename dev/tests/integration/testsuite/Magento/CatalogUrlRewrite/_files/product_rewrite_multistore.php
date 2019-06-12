<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
<<<<<<< HEAD
=======

>>>>>>> 57ffbd948415822d134397699f69411b67bcf7bc
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Catalog\Setup\CategorySetup;
use Magento\Store\Model\StoreManagerInterface;
use Magento\TestFramework\Helper\Bootstrap;

\Magento\TestFramework\Helper\Bootstrap::getInstance()
    ->loadArea(\Magento\Backend\App\Area\FrontNameResolver::AREA_CODE);

require __DIR__ . '/../../Store/_files/store.php';

/** @var $installer CategorySetup */
$objectManager = Bootstrap::getObjectManager();
$installer = $objectManager->create(CategorySetup::class);
$storeManager = $objectManager->get(StoreManagerInterface::class);
$storeManager->setCurrentStore(0);

/** @var $product \Magento\Catalog\Model\Product */
$product = $objectManager->create(\Magento\Catalog\Model\Product::class);
$product->setTypeId(\Magento\Catalog\Model\Product\Type::TYPE_SIMPLE)
    ->setAttributeSetId($installer->getAttributeSetId('catalog_product', 'Default'))
    ->setStoreId(0)
    ->setWebsiteIds([1])
    ->setName('Product1')
    ->setSku('product1')
    ->setPrice(10)
    ->setWeight(18)
    ->setStockData(['use_config_manage_stock' => 0])
    ->setUrlKey('product-1')
    ->setVisibility(\Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH)
    ->setStatus(\Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED);

/** @var ProductRepositoryInterface $productRepository */
$productRepository = $objectManager->get(ProductRepositoryInterface::class);
$productRepository->save($product);
