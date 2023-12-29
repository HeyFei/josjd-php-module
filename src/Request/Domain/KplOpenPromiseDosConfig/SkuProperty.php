<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenPromiseDosConfig;

class SkuProperty
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.SkuProperty';
    }

    private $sku;

    public function setSku($sku): void
    {
        $this->params['sku'] = $sku;
    }

    public function getSku()
    {
        return $this->sku;
    }

    private $venderType;

    public function setVenderType($venderType): void
    {
        $this->params['venderType'] = $venderType;
    }

    public function getVenderType()
    {
        return $this->venderType;
    }

    private $storeProperty;

    public function setStoreProperty($storeProperty): void
    {
        $this->params['storeProperty'] = $storeProperty;
    }

    public function getStoreProperty()
    {
        return $this->storeProperty;
    }

    private $skuMark;

    public function setSkuMark($skuMark): void
    {
        $this->params['skuMark'] = $skuMark;
    }

    public function getSkuMark()
    {
        return $this->skuMark;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
