<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenActivityBonusQuery;

class Req
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.activity.bonus.BonusActivityReq';
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

    private $beginTime;

    public function setBeginTime($beginTime): void
    {
        $this->params['beginTime'] = $beginTime;
    }

    public function getBeginTime()
    {
        return $this->beginTime;
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
