<?php

declare(strict_types=1);

namespace LZJos\Request;

class YjcFgcGetOrderListRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.yjc.fgc.getOrderList';
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

    private $startTime;

    public function setStartTime($startTime): void
    {
        $this->startTime = $startTime;
        $this->apiParas['startTime'] = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    private $endTime;

    public function setEndTime($endTime): void
    {
        $this->endTime = $endTime;
        $this->apiParas['endTime'] = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }
}
