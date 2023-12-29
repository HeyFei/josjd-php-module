<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenOrderBonusQuery;

class OrderReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.order.bonus.BonusOrderReq';
    }

    private $optType;

    public function setOptType($optType): void
    {
        $this->params['optType'] = $optType;
    }

    public function getOptType()
    {
        return $this->optType;
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

    private $sortValue;

    public function setSortValue($sortValue): void
    {
        $this->params['sortValue'] = $sortValue;
    }

    public function getSortValue()
    {
        return $this->sortValue;
    }

    private $activityId;

    public function setActivityId($activityId): void
    {
        $this->params['activityId'] = $activityId;
    }

    public function getActivityId()
    {
        return $this->activityId;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
