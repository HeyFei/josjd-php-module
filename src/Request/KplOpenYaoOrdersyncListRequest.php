<?php

declare(strict_types=1);

namespace LZJos\Request;

class KplOpenYaoOrdersyncListRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kpl.open.yao.ordersync.list';
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

    private $beginTime;

    public function setBeginTime($beginTime): void
    {
        $this->apiParas['beginTime'] = $beginTime;
    }

    public function getBeginTime()
    {
        return $this->apiParas['beginTime'];
    }

    private $endTime;

    public function setEndTime($endTime): void
    {
        $this->apiParas['endTime'] = $endTime;
    }

    public function getEndTime()
    {
        return $this->apiParas['endTime'];
    }

    private $state;

    public function setState($state): void
    {
        $this->apiParas['state'] = $state;
    }

    public function getState()
    {
        return $this->apiParas['state'];
    }
}
