<?php

declare(strict_types=1);

namespace LZJos\Request;

class KplOpenWareZhaoshangGoodsQueryRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.kpl.open.ware.zhaoshang.goods.query';
    }

    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return '{}';
        }

        return json_encode($this->apiParas);
    }

    public function check(): void
    {
    }

    public function putOtherTextParam($key, $value): void
    {
        $this->apiParas[$key] = $value;
        $this->{$key} = $value;
    }

    private $version;

    public function setVersion($version): void
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }

    private $pageIndex;

    public function setPageIndex($pageIndex): void
    {
        $this->pageIndex = $pageIndex;
        $this->apiParas['pageIndex'] = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    private $pageSize;

    public function setPageSize($pageSize): void
    {
        $this->pageSize = $pageSize;
        $this->apiParas['pageSize'] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }
}
