<?php

declare(strict_types=1);

namespace LZJos\Request;

class JsfXbXBProductServiceQueryProductsRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.jsf.xb.XBProductService.queryProducts';
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

    private $startRow;

    public function setStartRow($startRow): void
    {
        $this->startRow = $startRow;
        $this->apiParas['startRow'] = $startRow;
    }

    public function getStartRow()
    {
        return $this->startRow;
    }

    private $limitCnt;

    public function setLimitCnt($limitCnt): void
    {
        $this->limitCnt = $limitCnt;
        $this->apiParas['limitCnt'] = $limitCnt;
    }

    public function getLimitCnt()
    {
        return $this->limitCnt;
    }
}
