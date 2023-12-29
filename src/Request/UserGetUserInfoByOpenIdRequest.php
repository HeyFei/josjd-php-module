<?php

declare(strict_types=1);

namespace LZJos\Request;

class UserGetUserInfoByOpenIdRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.user.getUserInfoByOpenId';
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

    private $openId;

    public function setOpenId($openId): void
    {
        $this->openId = $openId;
        $this->apiParas['openId'] = $openId;
    }

    public function getOpenId()
    {
        return $this->openId;
    }
}
