<?php

declare(strict_types=1);

namespace LZJos\Request;

class KeplerPushmsgGetAppConfigTemplateListRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.kepler.pushmsg.getAppConfigTemplateList';
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

    private $appid;

    public function setAppid($appid): void
    {
        $this->apiParas['appid'] = $appid;
    }

    public function getAppid()
    {
        return $this->apiParas['appid'];
    }

    private $openid;

    public function setOpenid($openid): void
    {
        $this->apiParas['openid'] = $openid;
    }

    public function getOpenid()
    {
        return $this->apiParas['openid'];
    }

    private $maps;

    public function setMaps($maps): void
    {
        $this->apiParas['maps'] = $maps;
    }

    public function getMaps()
    {
        return $this->apiParas['maps'];
    }
}
