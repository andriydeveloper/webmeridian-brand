<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */

namespace WebMeridian\Brand\Api\Data;

interface BrandSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Brand list.
     * @return \WebMeridian\Brand\Api\Data\BrandInterface[]
     */
    public function getItems();

    /**
     * Set id list.
     * @param \WebMeridian\Brand\Api\Data\BrandInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

