<?php

declare(strict_types=1);

namespace LZJos\Request;

class PopOrderGetmobilelistRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.pop.order.getmobilelist';
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

    private $appName;

    public function setAppName($appName): void
    {
        $this->appName = $appName;
        $this->apiParas['appName'] = $appName;
    }

    public function getAppName()
    {
        return $this->appName;
    }

    private $region;

    public function setRegion($region): void
    {
        $this->region = $region;
        $this->apiParas['region'] = $region;
    }

    public function getRegion()
    {
        return $this->region;
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

    private $expiration;

    public function setExpiration($expiration): void
    {
        $this->expiration = $expiration;
        $this->apiParas['expiration'] = $expiration;
    }

    public function getExpiration()
    {
        return $this->expiration;
    }
}
