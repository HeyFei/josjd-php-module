<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenStatisticsRedpacketAgentQuery;

class EffectDataAgentReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.statistics.agent.RedPacketEffectDataAgentReq';
    }

    private $actId;

    public function setActId($actId): void
    {
        $this->params['actId'] = $actId;
    }

    public function getActId()
    {
        return $this->actId;
    }

    private $startDate;

    public function setStartDate($startDate): void
    {
        $this->params['startDate'] = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    private $endDate;

    public function setEndDate($endDate): void
    {
        $this->params['endDate'] = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
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

    private $type;

    public function setType($type): void
    {
        $this->params['type'] = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
