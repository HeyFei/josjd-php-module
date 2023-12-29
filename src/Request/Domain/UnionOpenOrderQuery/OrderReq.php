<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenOrderQuery;

class OrderReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.order.base.OrderReq';
    }

    private $pageNo;

    public function setPageNo($pageNo): void
    {
        $this->params['pageNo'] = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    private $pageSize;

    public function setPageSize($pageSize): void
    {
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
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

    private $time;

    public function setTime($time): void
    {
        $this->params['time'] = $time;
    }

    public function getTime()
    {
        return $this->time;
    }

    private $childUnionId;

    public function setChildUnionId($childUnionId): void
    {
        $this->params['childUnionId'] = $childUnionId;
    }

    public function getChildUnionId()
    {
        return $this->childUnionId;
    }

    private $key;

    public function setKey($key): void
    {
        $this->params['key'] = $key;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
