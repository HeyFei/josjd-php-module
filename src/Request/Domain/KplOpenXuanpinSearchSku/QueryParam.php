<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenXuanpinSearchSku;

class QueryParam
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kepler.xuanpin.export.domain.QueryParam';
    }

    private $keywords;

    public function setKeywords($keywords): void
    {
        $this->params['keywords'] = $keywords;
    }

    public function getKeywords()
    {
        return $this->keywords;
    }

    private $cids1;

    public function setCids1($cids1): void
    {
        $this->params['cids1'] = $cids1;
    }

    public function getCids1()
    {
        return $this->cids1;
    }

    private $cids2;

    public function setCids2($cids2): void
    {
        $this->params['cids2'] = $cids2;
    }

    public function getCids2()
    {
        return $this->cids2;
    }

    private $cids3;

    public function setCids3($cids3): void
    {
        $this->params['cids3'] = $cids3;
    }

    public function getCids3()
    {
        return $this->cids3;
    }

    private $sellerType;

    public function setSellerType($sellerType): void
    {
        $this->params['sellerType'] = $sellerType;
    }

    public function getSellerType()
    {
        return $this->sellerType;
    }

    private $minPrice;

    public function setMinPrice($minPrice): void
    {
        $this->params['minPrice'] = $minPrice;
    }

    public function getMinPrice()
    {
        return $this->minPrice;
    }

    private $maxPrice;

    public function setMaxPrice($maxPrice): void
    {
        $this->params['maxPrice'] = $maxPrice;
    }

    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
