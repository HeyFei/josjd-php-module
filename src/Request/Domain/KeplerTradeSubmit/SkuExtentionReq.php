<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerTradeSubmit;

class SkuExtentionReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.SkuExtentionReq';
    }

    private $thirdCategoryId;

    public function setThirdCategoryId($thirdCategoryId): void
    {
        $this->params['thirdCategoryId'] = $thirdCategoryId;
    }

    public function getThirdCategoryId()
    {
        return $this->thirdCategoryId;
    }

    private $vendor;

    public function setVendor($vendor): void
    {
        $this->params['vendor'] = $vendor;
    }

    public function getVendor()
    {
        return $this->vendor;
    }

    private $vendorType;

    public function setVendorType($vendorType): void
    {
        $this->params['vendorType'] = $vendorType;
    }

    public function getVendorType()
    {
        return $this->vendorType;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
