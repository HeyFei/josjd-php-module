<?php

declare(strict_types=1);

namespace LZJos\Request;

class UnionOpenSettleQueryRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.union.open.settle.query';
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

    private $payMonth;

    public function setPayMonth($payMonth): void
    {
        $this->apiParas['payMonth'] = $payMonth;
    }

    public function getPayMonth()
    {
        return $this->apiParas['payMonth'];
    }
}
