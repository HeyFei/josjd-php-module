<?php

declare(strict_types=1);

namespace LZJos\Request;

class JosMasterKeyGetRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.jos.master.key.get';
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

    private $sig;

    public function setSig($sig): void
    {
        $this->sig = $sig;
        $this->apiParas['sig'] = $sig;
    }

    public function getSig()
    {
        return $this->sig;
    }

    private $sdkVer;

    public function setSdkVer($sdkVer): void
    {
        $this->sdkVer = $sdkVer;
        $this->apiParas['sdk_ver'] = $sdkVer;
    }

    public function getSdkVer()
    {
        return $this->sdkVer;
    }

    private $ts;

    public function setTs($ts): void
    {
        $this->ts = $ts;
        $this->apiParas['ts'] = $ts;
    }

    public function getTs()
    {
        return $this->ts;
    }

    private $tid;

    public function setTid($tid): void
    {
        $this->tid = $tid;
        $this->apiParas['tid'] = $tid;
    }

    public function getTid()
    {
        return $this->tid;
    }
}
