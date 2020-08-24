<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace WebMeridian\Brand\Model;

use Magento\Framework\Api\DataObjectHelper;
use WebMeridian\Brand\Api\Data\BrandInterface;
use WebMeridian\Brand\Api\Data\BrandInterfaceFactory;

class Brand extends \Magento\Framework\Model\AbstractModel
{

    protected $brandDataFactory;

    protected $dataObjectHelper;

    protected $_eventPrefix = 'webmeridian_brand_brand';

    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param BrandInterfaceFactory $brandDataFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param \WebMeridian\Brand\Model\ResourceModel\Brand $resource
     * @param \WebMeridian\Brand\Model\ResourceModel\Brand\Collection $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        BrandInterfaceFactory $brandDataFactory,
        DataObjectHelper $dataObjectHelper,
        \WebMeridian\Brand\Model\ResourceModel\Brand $resource,
        \WebMeridian\Brand\Model\ResourceModel\Brand\Collection $resourceCollection,
        array $data = []
    ) {
        $this->brandDataFactory = $brandDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Retrieve brand model with brand data
     * @return BrandInterface
     */
    public function getDataModel()
    {
        $brandData = $this->getData();
        
        $brandDataObject = $this->brandDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $brandDataObject,
            $brandData,
            BrandInterface::class
        );
        
        return $brandDataObject;
    }
}

