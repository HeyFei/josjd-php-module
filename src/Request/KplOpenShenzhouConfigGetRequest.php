<?php

declare(strict_types=1);

namespace LZJos\Request;

class KplOpenShenzhouConfigGetRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kpl.open.shenzhou.config.get';
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

    private $tgt;

    public function setTgt($tgt): void
    {
        $this->apiParas['tgt'] = $tgt;
    }

    public function getTgt()
    {
        return $this->apiParas['tgt'];
    }

    private $appId;

    public function setAppId($appId): void
    {
        $this->apiParas['appId'] = $appId;
    }

    public function getAppId()
    {
        return $this->apiParas['appId'];
    }

    private $client;

    public function setClient($client): void
    {
        $this->apiParas['client'] = $client;
    }

    public function getClient()
    {
        return $this->apiParas['client'];
    }

    private $clientIp;

    public function setClientIp($clientIp): void
    {
        $this->apiParas['clientIp'] = $clientIp;
    }

    public function getClientIp()
    {
        return $this->apiParas['clientIp'];
    }

    private $sequence;

    public function setSequence($sequence): void
    {
        $this->apiParas['sequence'] = $sequence;
    }

    public function getSequence()
    {
        return $this->apiParas['sequence'];
    }
}
