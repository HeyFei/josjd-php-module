<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenYaoMultipriceUpdate;

class PriceName
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.PriceName';
    }

    private $price;

    public function setPrice($price): void
    {
        $this->params['price'] = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    private $priceNameEnum;

    public function setPriceNameEnum($priceNameEnum): void
    {
        $this->params['priceNameEnum'] = $priceNameEnum;
    }

    public function getPriceNameEnum()
    {
        return $this->priceNameEnum;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
