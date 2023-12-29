<?php

declare(strict_types=1);

namespace LZJos\Request;

class KplOpenGetnewstockbyidQueryRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kpl.open.getnewstockbyid.query';
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

    private $skuNums;

    public function setSkuNums($skuNums): void
    {
        $this->apiParas['skuNums'] = $skuNums;
    }

    public function getSkuNums()
    {
        return $this->apiParas['skuNums'];
    }

    private $area;

    public function setArea($area): void
    {
        $this->apiParas['area'] = $area;
    }

    public function getArea()
    {
        return $this->apiParas['area'];
    }
}
