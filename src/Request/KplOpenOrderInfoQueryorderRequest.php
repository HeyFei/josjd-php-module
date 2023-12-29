<?php

declare(strict_types=1);

namespace LZJos\Request;

class KplOpenOrderInfoQueryorderRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kpl.open.order.info.queryorder';
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

    private $var1;

    public function setVar1($var1): void
    {
        $this->apiParas['var1'] = $var1;
    }

    public function getVar1()
    {
        return $this->apiParas['var1'];
    }
}
