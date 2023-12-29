<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenNosecretpayGetsignurl;

class Req
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.alpha.config.wrap.NosecretPaySignUrlReq';
    }

    private $deviceId;

    public function setDeviceId($deviceId): void
    {
        $this->params['deviceId'] = $deviceId;
    }

    public function getDeviceId()
    {
        return $this->deviceId;
    }

    private $returnUrl;

    public function setReturnUrl($returnUrl): void
    {
        $this->params['returnUrl'] = $returnUrl;
    }

    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    private $macAddress;

    public function setMacAddress($macAddress): void
    {
        $this->params['macAddress'] = $macAddress;
    }

    public function getMacAddress()
    {
        return $this->macAddress;
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

    private $appType;

    public function setAppType($appType): void
    {
        $this->params['appType'] = $appType;
    }

    public function getAppType()
    {
        return $this->appType;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
