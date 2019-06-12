<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\ReleaseNotification\Model\Viewer;

use Magento\Framework\DataObject;

/**
<<<<<<< HEAD
 * Class Log
 *
=======
>>>>>>> 57ffbd948415822d134397699f69411b67bcf7bc
 * Release notification viewer log resource
 */
class Log extends DataObject
{
    /**
     * Get log id
     *
     * @return int
     */
    public function getId()
    {
        return $this->getData('id');
    }

    /**
     * Get viewer id
     *
     * @return int
     */
    public function getViewerId()
    {
        return $this->getData('viewer_id');
    }

    /**
     * Get last viewed product version
     *
     * @return string
     */
    public function getLastViewVersion()
    {
        return $this->getData('last_view_version');
    }
}
