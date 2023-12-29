<?php

declare(strict_types=1);

namespace LZJos\Request;

class BizProductGetcategorysRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.biz.product.getcategorys';
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

    private $pageNo;

    public function setPageNo($pageNo): void
    {
        $this->apiParas['pageNo'] = $pageNo;
    }

    public function getPageNo()
    {
        return $this->apiParas['pageNo'];
    }

    private $pageSize;

    public function setPageSize($pageSize): void
    {
        $this->apiParas['pageSize'] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->apiParas['pageSize'];
    }

    private $parentId;

    public function setParentId($parentId): void
    {
        $this->apiParas['parentId'] = $parentId;
    }

    public function getParentId()
    {
        return $this->apiParas['parentId'];
    }

    private $catClass;

    public function setCatClass($catClass): void
    {
        $this->apiParas['catClass'] = $catClass;
    }

    public function getCatClass()
    {
        return $this->apiParas['catClass'];
    }
}
