<?php

declare(strict_types=1);

namespace LZJos\Request;

class KeplerXuanpinCpsurlConvertRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kepler.xuanpin.cpsurl.convert';
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

    private $pin;

    public function setPin($pin): void
    {
        $this->apiParas['pin'] = $pin;
    }

    public function getPin()
    {
        return $this->apiParas['pin'];
    }

    private $webId;

    public function setWebId($webId): void
    {
        $this->apiParas['webId'] = $webId;
    }

    public function getWebId()
    {
        return $this->apiParas['webId'];
    }

    private $positionId;

    public function setPositionId($positionId): void
    {
        $this->apiParas['positionId'] = $positionId;
    }

    public function getPositionId()
    {
        return $this->apiParas['positionId'];
    }

    private $materalId;

    public function setMateralId($materalId): void
    {
        $this->apiParas['materalId'] = $materalId;
    }

    public function getMateralId()
    {
        return $this->apiParas['materalId'];
    }
}
