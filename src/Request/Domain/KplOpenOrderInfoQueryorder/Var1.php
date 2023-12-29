<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenOrderInfoQueryorder;

class Var1
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.ads.union.allocate.api.external.service.platform.OpenReqVo';
    }

    private $unionId;

    public function setUnionId($unionId): void
    {
        $this->params['unionId'] = $unionId;
    }

    public function getUnionId()
    {
        return $this->unionId;
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

    private $optType;

    public function setOptType($optType): void
    {
        $this->params['optType'] = $optType;
    }

    public function getOptType()
    {
        return $this->optType;
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

    public function getInstance()
    {
        return $this->params;
    }
}
