<?php

declare(strict_types=1);

namespace LZJos\Request;

class KplOpenAlphashoppingconfSaveinfoRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kpl.open.alphashoppingconf.saveinfo';
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

    private $dataJson;

    public function setDataJson($dataJson): void
    {
        $this->apiParas['dataJson'] = $dataJson;
    }

    public function getDataJson()
    {
        return $this->apiParas['dataJson'];
    }

    private $ptKey;

    public function setPtKey($ptKey): void
    {
        $this->apiParas['ptKey'] = $ptKey;
    }

    public function getPtKey()
    {
        return $this->apiParas['ptKey'];
    }
}
