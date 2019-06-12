<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 57ffbd948415822d134397699f69411b67bcf7bc
namespace Magento\CatalogSearch\Plugin;

/**
 * Enable Product EAV indexer in configuration for MySQL search engine
<<<<<<< HEAD
=======
 *
 * @deprecated
 * @see \Magento\ElasticSearch
>>>>>>> 57ffbd948415822d134397699f69411b67bcf7bc
 */
class EnableEavIndexer
{
    /**
     * Config search engine path
     */
    const SEARCH_ENGINE_VALUE_PATH = 'groups/search/fields/engine/value';

    /**
     * @param \Magento\Config\Model\Config $subject
     */
    public function beforeSave(\Magento\Config\Model\Config $subject)
    {
        $searchEngine = $subject->getData(self::SEARCH_ENGINE_VALUE_PATH);
        if ($searchEngine === 'mysql') {
            $data = $subject->getData();
            $data['groups']['search']['fields']['enable_eav_indexer']['value'] = 1;

            $subject->setData($data);
        }
    }
}
