<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenGoodsBigfieldQuery;

class GoodsReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.goods.bigfield.BigFieldGoodsReq';
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

    private $fields;

    public function setFields($fields): void
    {
        $this->params['fields'] = $fields;
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
