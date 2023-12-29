<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenStatisticsRedpacketQuery;

class EffectDataReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.statistics.RedPacketEffectDataReq';
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

    private $positionId;

    public function setPositionId($positionId): void
    {
        $this->params['positionId'] = $positionId;
    }

    public function getPositionId()
    {
        return $this->positionId;
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

    private $key;

    public function setKey($key): void
    {
        $this->params['key'] = $key;
    }

    public function getKey()
    {
        return $this->key;
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

    private $channelIds;

    public function setChannelIds($channelIds): void
    {
        $this->params['channelIds'] = $channelIds;
    }

    public function getChannelIds()
    {
        return $this->channelIds;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
