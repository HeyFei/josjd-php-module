<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenSellingGoodsQuery;

class Req
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.goods.selling.SellingGoodsReq';
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

    public function getInstance()
    {
        return $this->params;
    }
}
