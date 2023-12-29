<?php

declare(strict_types=1);

namespace LZJos\Request;

class MfaInnerValidateMsgCodeRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.mfa.inner.validateMsgCode';
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

    private $msgCode;

    public function setMsgCode($msgCode): void
    {
        $this->msgCode = $msgCode;
        $this->apiParas['msgCode'] = $msgCode;
    }

    public function getMsgCode()
    {
        return $this->msgCode;
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
