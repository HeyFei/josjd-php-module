<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenOrderAgentQuery;

class OrderReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.order.agent.OrderAgentReq';
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
