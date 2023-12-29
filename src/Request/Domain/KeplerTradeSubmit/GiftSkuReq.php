<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerTradeSubmit;

class GiftSkuReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.GiftSkuReq';
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

    private $num;

    public function setNum($num): void
    {
        $this->params['num'] = $num;
    }

    public function getNum()
    {
        return $this->num;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
