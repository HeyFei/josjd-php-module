<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenSkuQueryinfo;

class SkuQuery
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.gongxiao.kepler.domain.SkuQueryReq';
    }

    private $venderId;

    public function setVenderId($venderId): void
    {
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId()
    {
        return $this->venderId;
    }

    private $skuAlias;

    public function setSkuAlias($skuAlias): void
    {
        $this->params['skuAlias'] = $skuAlias;
    }

    public function getSkuAlias()
    {
        return $this->skuAlias;
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

    private $currentPage;

    public function setCurrentPage($currentPage): void
    {
        $this->params['currentPage'] = $currentPage;
    }

    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    private $wareState;

    public function setWareState($wareState): void
    {
        $this->params['wareState'] = $wareState;
    }

    public function getWareState()
    {
        return $this->wareState;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
