<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenNosecretpaySavetoken;

class Req
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.alpha.config.wrap.NosecretPayTokenReq';
    }

    private $id;

    public function setId($id): void
    {
        $this->params['id'] = $id;
    }

    public function getId()
    {
        return $this->id;
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

    private $token;

    public function setToken($token): void
    {
        $this->params['token'] = $token;
    }

    public function getToken()
    {
        return $this->token;
    }

    private $remarks;

    public function setRemarks($remarks): void
    {
        $this->params['remarks'] = $remarks;
    }

    public function getRemarks()
    {
        return $this->remarks;
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

    public function getInstance()
    {
        return $this->params;
    }
}
