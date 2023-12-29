<?php

declare(strict_types=1);

namespace LZJos\Request;

class OpenOrderUpdateOrderStateNewRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.open.order.updateOrderStateNew';
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

    private $orderExtInfo;

    public function setOrderExtInfo($orderExtInfo): void
    {
        $this->apiParas['orderExtInfo'] = $orderExtInfo;
    }

    public function getOrderExtInfo()
    {
        return $this->apiParas['orderExtInfo'];
    }

    private $deliverInfo;

    public function setDeliverInfo($deliverInfo): void
    {
        $this->apiParas['deliverInfo'] = $deliverInfo;
    }

    public function getDeliverInfo()
    {
        return $this->apiParas['deliverInfo'];
    }
}
