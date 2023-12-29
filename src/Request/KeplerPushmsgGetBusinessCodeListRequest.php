<?php

declare(strict_types=1);

namespace LZJos\Request;

class KeplerPushmsgGetBusinessCodeListRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.kepler.pushmsg.getBusinessCodeList';
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

    private $appId;

    public function setAppId($appId): void
    {
        $this->appId = $appId;
        $this->apiParas['appId'] = $appId;
    }

    public function getAppId()
    {
        return $this->appId;
    }
}
