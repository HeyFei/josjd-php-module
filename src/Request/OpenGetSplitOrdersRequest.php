<?php

declare(strict_types=1);

namespace LZJos\Request;

class OpenGetSplitOrdersRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.open.getSplitOrders';
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
        $this->beginTime = $beginTime;
        $this->apiParas['beginTime'] = $beginTime;
    }

    public function getBeginTime()
    {
        return $this->beginTime;
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

    private $orderState;

    public function setOrderState($orderState): void
    {
        $this->orderState = $orderState;
        $this->apiParas['orderState'] = $orderState;
    }

    public function getOrderState()
    {
        return $this->orderState;
    }
}
