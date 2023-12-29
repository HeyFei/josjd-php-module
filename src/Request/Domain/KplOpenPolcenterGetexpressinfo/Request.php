<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenPolcenterGetexpressinfo;

class Request
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.polcenter.manager.entity.CommonRequest';
    }

    private $orderNum;

    public function setOrderNum($orderNum): void
    {
        $this->params['orderNum'] = $orderNum;
    }

    public function getOrderNum()
    {
        return $this->orderNum;
    }

    private $mobile;

    public function setMobile($mobile): void
    {
        $this->params['mobile'] = $mobile;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    private $factoryId;

    public function setFactoryId($factoryId): void
    {
        $this->params['factoryId'] = $factoryId;
    }

    public function getFactoryId()
    {
        return $this->factoryId;
    }

    private $androidId;

    public function setAndroidId($androidId): void
    {
        $this->params['androidId'] = $androidId;
    }

    public function getAndroidId()
    {
        return $this->androidId;
    }

    private $imei;

    public function setImei($imei): void
    {
        $this->params['imei'] = $imei;
    }

    public function getImei()
    {
        return $this->imei;
    }

    private $wifiMac;

    public function setWifiMac($wifiMac): void
    {
        $this->params['wifiMac'] = $wifiMac;
    }

    public function getWifiMac()
    {
        return $this->wifiMac;
    }

    private $clientIp;

    public function setClientIp($clientIp): void
    {
        $this->params['clientIp'] = $clientIp;
    }

    public function getClientIp()
    {
        return $this->clientIp;
    }

    private $bussName;

    public function setBussName($bussName): void
    {
        $this->params['bussName'] = $bussName;
    }

    public function getBussName()
    {
        return $this->bussName;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
