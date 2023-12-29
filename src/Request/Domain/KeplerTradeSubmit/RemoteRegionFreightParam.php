<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerTradeSubmit;

class RemoteRegionFreightParam
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.RemoteRegionFreightParam';
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

    private $num;

    public function setNum($num): void
    {
        $this->params['num'] = $num;
    }

    public function getNum()
    {
        return $this->num;
    }

    private $freight;

    public function setFreight($freight): void
    {
        $this->params['freight'] = $freight;
    }

    public function getFreight()
    {
        return $this->freight;
    }

    private $venderId;

    public function setVenderId($venderId): void
    {
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId()
    {
        return $this->venderId;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
