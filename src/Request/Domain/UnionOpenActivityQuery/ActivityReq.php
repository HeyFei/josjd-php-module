<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenActivityQuery;

class ActivityReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.activity.base.ActivityReq';
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

    private $poolId;

    public function setPoolId($poolId): void
    {
        $this->params['poolId'] = $poolId;
    }

    public function getPoolId()
    {
        return $this->poolId;
    }

    private $activeDate;

    public function setActiveDate($activeDate): void
    {
        $this->params['activeDate'] = $activeDate;
    }

    public function getActiveDate()
    {
        return $this->activeDate;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
