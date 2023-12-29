<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\AfterSaleAvailableNumberCompQuery;

class Param
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.AvailableNumComQueParamReqVo';
    }

    private $jdOrderId;

    public function setJdOrderId($jdOrderId): void
    {
        $this->params['jdOrderId'] = $jdOrderId;
    }

    public function getJdOrderId()
    {
        return $this->jdOrderId;
    }

    private $skuId;

    public function setSkuId($skuId): void
    {
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
