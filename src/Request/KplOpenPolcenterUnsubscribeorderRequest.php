<?php

declare(strict_types=1);

namespace LZJos\Request;

class KplOpenPolcenterUnsubscribeorderRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.kpl.open.polcenter.unsubscribeorder';
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

    private $factoryId;

    public function setFactoryId($factoryId): void
    {
        $this->factoryId = $factoryId;
        $this->apiParas['factoryId'] = $factoryId;
    }

    public function getFactoryId()
    {
        return $this->factoryId;
    }

    private $clientIp;

    public function setClientIp($clientIp): void
    {
        $this->clientIp = $clientIp;
        $this->apiParas['clientIp'] = $clientIp;
    }

    public function getClientIp()
    {
        return $this->clientIp;
    }

    private $mobile;

    public function setMobile($mobile): void
    {
        $this->mobile = $mobile;
        $this->apiParas['mobile'] = $mobile;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    private $orderNum;

    public function setOrderNum($orderNum): void
    {
        $this->orderNum = $orderNum;
        $this->apiParas['orderNum'] = $orderNum;
    }

    public function getOrderNum()
    {
        return $this->orderNum;
    }

    private $imei;

    public function setImei($imei): void
    {
        $this->imei = $imei;
        $this->apiParas['imei'] = $imei;
    }

    public function getImei()
    {
        return $this->imei;
    }

    private $wifiMac;

    public function setWifiMac($wifiMac): void
    {
        $this->wifiMac = $wifiMac;
        $this->apiParas['wifiMac'] = $wifiMac;
    }

    public function getWifiMac()
    {
        return $this->wifiMac;
    }

    private $bussName;

    public function setBussName($bussName): void
    {
        $this->bussName = $bussName;
        $this->apiParas['bussName'] = $bussName;
    }

    public function getBussName()
    {
        return $this->bussName;
    }

    private $androidId;

    public function setAndroidId($androidId): void
    {
        $this->androidId = $androidId;
        $this->apiParas['androidId'] = $androidId;
    }

    public function getAndroidId()
    {
        return $this->androidId;
    }
}
