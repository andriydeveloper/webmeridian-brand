<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */

namespace WebMeridian\Brand\Api\Data;

interface BrandInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{

    const ID = 'id';


    /**
     * Get id
     * @return string|null
     */
    public function getId();

    /**
     * Set id
     * @param string $id
     * @return \WebMeridian\Brand\Api\Data\BrandInterface
     */
    public function setId($id);

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \WebMeridian\Brand\Api\Data\BrandExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     * @param \WebMeridian\Brand\Api\Data\BrandExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \WebMeridian\Brand\Api\Data\BrandExtensionInterface $extensionAttributes
    );
}

