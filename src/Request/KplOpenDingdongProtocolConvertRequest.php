<?php

declare(strict_types=1);

namespace LZJos\Request;

class KplOpenDingdongProtocolConvertRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kpl.open.dingdong.protocol.convert';
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

    private $inputStr;

    public function setInputStr($inputStr): void
    {
        $this->apiParas['inputStr'] = $inputStr;
    }

    public function getInputStr()
    {
        return $this->apiParas['inputStr'];
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
}
