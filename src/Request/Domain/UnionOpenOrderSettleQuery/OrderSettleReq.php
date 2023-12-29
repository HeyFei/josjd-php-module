<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenOrderSettleQuery;

class OrderSettleReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.order.Settle.OrderSettleReq';
    }

    private $applyId;

    public function setApplyId($applyId): void
    {
        $this->params['applyId'] = $applyId;
    }

    public function getApplyId()
    {
        return $this->applyId;
    }

    private $startTime;

    public function setStartTime($startTime): void
    {
        $this->params['startTime'] = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    private $endTime;

    public function setEndTime($endTime): void
    {
        $this->params['endTime'] = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    private $pageIndex;

    public function setPageIndex($pageIndex): void
    {
        $this->params['pageIndex'] = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
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

    public function getInstance()
    {
        return $this->params;
    }
}
