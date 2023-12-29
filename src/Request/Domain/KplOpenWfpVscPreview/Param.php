<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenWfpVscPreview;

class Param
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.RequestWrap';
    }

    private $merchantCode;

    public function setMerchantCode($merchantCode): void
    {
        $this->params['merchantCode'] = $merchantCode;
    }

    public function getMerchantCode()
    {
        return $this->merchantCode;
    }

    private $appCode;

    public function setAppCode($appCode): void
    {
        $this->params['appCode'] = $appCode;
    }

    public function getAppCode()
    {
        return $this->appCode;
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

    private $source;

    public function setSource($source): void
    {
        $this->params['source'] = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

    private $businessType;

    public function setBusinessType($businessType): void
    {
        $this->params['businessType'] = $businessType;
    }

    public function getBusinessType()
    {
        return $this->businessType;
    }

    private $data;

    public function setData($data): void
    {
        $this->params['data'] = $data->getInstance()
        ;
    }

    private $operator;

    public function setOperator($operator): void
    {
        $this->params['operator'] = $operator;
    }

    public function getOperator()
    {
        return $this->operator;
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

    private $clientPort;

    public function setClientPort($clientPort): void
    {
        $this->params['clientPort'] = $clientPort;
    }

    public function getClientPort()
    {
        return $this->clientPort;
    }

    private $trackerId;

    public function setTrackerId($trackerId): void
    {
        $this->params['trackerId'] = $trackerId;
    }

    public function getTrackerId()
    {
        return $this->trackerId;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
