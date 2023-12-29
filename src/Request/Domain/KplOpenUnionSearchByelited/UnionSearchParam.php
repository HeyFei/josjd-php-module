<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenUnionSearchByelited;

class UnionSearchParam
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.marketing.common.client.domain.union.UnionSearchParam';
    }

    private $eliteId;

    public function setEliteId($eliteId): void
    {
        $this->params['eliteId'] = $eliteId;
    }

    public function getEliteId()
    {
        return $this->eliteId;
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

    private $sortName;

    public function setSortName($sortName): void
    {
        $this->params['sortName'] = $sortName;
    }

    public function getSortName()
    {
        return $this->sortName;
    }

    private $sortType;

    public function setSortType($sortType): void
    {
        $this->params['sortType'] = $sortType;
    }

    public function getSortType()
    {
        return $this->sortType;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
