<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenStatisticsGoodsSalesQuery;

class EffectDataReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.statistics.goods.GoodsSalesVolumeReq';
    }

    private $skuIds;

    public function setSkuIds($skuIds): void
    {
        $this->params['skuIds'] = $skuIds;
    }

    public function getSkuIds()
    {
        return $this->skuIds;
    }

    private $type;

    public function setType($type): void
    {
        $this->params['type'] = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    private $number;

    public function setNumber($number): void
    {
        $this->params['number'] = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
