<?php

declare(strict_types=1);

namespace LZJos\Request;

class KplOpenGetsellpriceQueryRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kpl.open.getsellprice.query';
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

    private $sku;

    public function setSku($sku): void
    {
        $this->apiParas['sku'] = $sku;
    }

    public function getSku()
    {
        return $this->apiParas['sku'];
    }

    private $containsTax;

    public function setContainsTax($containsTax): void
    {
        $this->apiParas['containsTax'] = $containsTax;
    }

    public function getContainsTax()
    {
        return $this->apiParas['containsTax'];
    }

    private $queryExts;

    public function setQueryExts($queryExts): void
    {
        $this->apiParas['queryExts'] = $queryExts;
    }

    public function getQueryExts()
    {
        return $this->apiParas['queryExts'];
    }
}
