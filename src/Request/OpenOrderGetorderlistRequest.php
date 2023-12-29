<?php

declare(strict_types=1);

namespace LZJos\Request;

class OpenOrderGetorderlistRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.open.order.getorderlist';
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

    private $venderId;

    public function setVenderId($venderId): void
    {
        $this->venderId = $venderId;
        $this->apiParas['venderId'] = $venderId;
    }

    public function getVenderId()
    {
        return $this->venderId;
    }

    private $orderId;

    public function setOrderId($orderId): void
    {
        $this->orderId = $orderId;
        $this->apiParas['orderId'] = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }
}
