<?php

declare(strict_types=1);

namespace LZJos\Request;

class MfaInnerSendCodeToMobileRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.mfa.inner.sendCodeToMobile';
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

    private $rKey;

    public function setRKey($rKey): void
    {
        $this->rKey = $rKey;
        $this->apiParas['rKey'] = $rKey;
    }

    public function getRKey()
    {
        return $this->rKey;
    }

    private $validateType;

    public function setValidateType($validateType): void
    {
        $this->validateType = $validateType;
        $this->apiParas['validateType'] = $validateType;
    }

    public function getValidateType()
    {
        return $this->validateType;
    }
}
