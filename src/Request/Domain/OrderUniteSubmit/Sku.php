<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\OrderUniteSubmit;

class Sku
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.SkuInfo';
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

    private $bNeedAnnex;

    public function setBNeedAnnex($bNeedAnnex): void
    {
        $this->params['bNeedAnnex'] = $bNeedAnnex;
    }

    public function getBNeedAnnex()
    {
        return $this->bNeedAnnex;
    }

    private $bNeedGift;

    public function setBNeedGift($bNeedGift): void
    {
        $this->params['bNeedGift'] = $bNeedGift;
    }

    public function getBNeedGift()
    {
        return $this->bNeedGift;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
