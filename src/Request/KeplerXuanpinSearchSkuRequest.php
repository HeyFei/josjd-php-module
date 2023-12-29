<?php

declare(strict_types=1);

namespace LZJos\Request;

class KeplerXuanpinSearchSkuRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kepler.xuanpin.search.sku';
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

    private $queryParam;

    public function setQueryParam($queryParam): void
    {
        $this->apiParas['queryParam'] = $queryParam;
    }

    public function getQueryParam()
    {
        return $this->apiParas['queryParam'];
    }

    private $pageParam;

    public function setPageParam($pageParam): void
    {
        $this->apiParas['pageParam'] = $pageParam;
    }

    public function getPageParam()
    {
        return $this->apiParas['pageParam'];
    }

    private $orderField;

    public function setOrderField($orderField): void
    {
        $this->apiParas['orderField'] = $orderField;
    }

    public function getOrderField()
    {
        return $this->apiParas['orderField'];
    }
}
