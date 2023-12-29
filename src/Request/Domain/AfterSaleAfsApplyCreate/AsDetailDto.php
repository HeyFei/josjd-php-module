<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\AfterSaleAfsApplyCreate;

class AsDetailDto
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.AfterSaleDetailDto';
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

    private $skuNum;

    public function setSkuNum($skuNum): void
    {
        $this->params['skuNum'] = $skuNum;
    }

    public function getSkuNum()
    {
        return $this->skuNum;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
