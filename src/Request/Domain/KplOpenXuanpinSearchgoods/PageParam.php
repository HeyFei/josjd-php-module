<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenXuanpinSearchgoods;

class PageParam
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kepler.xuanpin.export.domain.PageParam';
    }

    private $pageNum;

    public function setPageNum($pageNum): void
    {
        $this->params['pageNum'] = $pageNum;
    }

    public function getPageNum()
    {
        return $this->pageNum;
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
