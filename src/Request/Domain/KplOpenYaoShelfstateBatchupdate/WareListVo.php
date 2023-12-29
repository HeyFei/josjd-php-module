<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenYaoShelfstateBatchupdate;

class WareListVo
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.WareListVo';
    }

    private $venderSku;

    public function setVenderSku($venderSku): void
    {
        $this->params['venderSku'] = $venderSku;
    }

    public function getVenderSku()
    {
        return $this->venderSku;
    }

    private $status;

    public function setStatus($status): void
    {
        $this->params['status'] = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    private $skuStock;

    public function setSkuStock($skuStock): void
    {
        $this->params['skuStock'] = $skuStock;
    }

    public function getSkuStock()
    {
        return $this->skuStock;
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

    private $validTime;

    public function setValidTime($validTime): void
    {
        $this->params['validTime'] = $validTime;
    }

    public function getValidTime()
    {
        return $this->validTime;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
