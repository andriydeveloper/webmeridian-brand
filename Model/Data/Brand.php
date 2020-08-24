<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */

namespace WebMeridian\Brand\Model\Data;

use WebMeridian\Brand\Api\Data\BrandInterface;

class Brand extends \Magento\Framework\Api\AbstractExtensibleObject implements BrandInterface
{


    /**
     * Get id
     * @return string|null
     */
    public function getId()
    {
        return $this->_get(self::ID);
    }

    /**
     * Set id
     * @param string $id
     * @return \WebMeridian\Brand\Api\Data\BrandInterface
     */
    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \WebMeridian\Brand\Api\Data\BrandExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * Set an extension attributes object.
     * @param \WebMeridian\Brand\Api\Data\BrandExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \WebMeridian\Brand\Api\Data\BrandExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}

