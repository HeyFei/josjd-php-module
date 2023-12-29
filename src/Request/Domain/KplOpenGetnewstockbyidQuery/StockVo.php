<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenGetnewstockbyidQuery;

class StockVo
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.StockVo';
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

    public function getInstance()
    {
        return $this->params;
    }
}
