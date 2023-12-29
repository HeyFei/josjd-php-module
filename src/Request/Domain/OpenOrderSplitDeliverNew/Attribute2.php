<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\OpenOrderSplitDeliverNew;

class Attribute2
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.gongxiao.kepler.domain.OrderExtSkuBatchInfo';
    }

    private $manufactureTime;

    public function setManufactureTime($manufactureTime): void
    {
        $this->params['manufactureTime'] = $manufactureTime;
    }

    public function getManufactureTime()
    {
        return $this->manufactureTime;
    }

    private $validTime;

    public function setValidTime($validTime): void
    {
        $this->params['validTime'] = $validTime;
    }

    public function getValidTime()
    {
        return $this->validTime;
    }

    private $batchNum;

    public function setBatchNum($batchNum): void
    {
        $this->params['batchNum'] = $batchNum;
    }

    public function getBatchNum()
    {
        return $this->batchNum;
    }

    private $batchCount;

    public function setBatchCount($batchCount): void
    {
        $this->params['batchCount'] = $batchCount;
    }

    public function getBatchCount()
    {
        return $this->batchCount;
    }

    private $skuPrice;

    public function setSkuPrice($skuPrice): void
    {
        $this->params['skuPrice'] = $skuPrice;
    }

    public function getSkuPrice()
    {
        return $this->skuPrice;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
