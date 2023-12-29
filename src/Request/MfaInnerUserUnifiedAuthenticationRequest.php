<?php

declare(strict_types=1);

namespace LZJos\Request;

class MfaInnerUserUnifiedAuthenticationRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.mfa.inner.userUnifiedAuthentication';
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

    private $deviceOSType;

    public function setDeviceOSType($deviceOSType): void
    {
        $this->deviceOSType = $deviceOSType;
        $this->apiParas['deviceOSType'] = $deviceOSType;
    }

    public function getDeviceOSType()
    {
        return $this->deviceOSType;
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

    private $businessType;

    public function setBusinessType($businessType): void
    {
        $this->businessType = $businessType;
        $this->apiParas['businessType'] = $businessType;
    }

    public function getBusinessType()
    {
        return $this->businessType;
    }

    private $eid;

    public function setEid($eid): void
    {
        $this->eid = $eid;
        $this->apiParas['eid'] = $eid;
    }

    public function getEid()
    {
        return $this->eid;
    }

    private $openUDID;

    public function setOpenUDID($openUDID): void
    {
        $this->openUDID = $openUDID;
        $this->apiParas['openUDID'] = $openUDID;
    }

    public function getOpenUDID()
    {
        return $this->openUDID;
    }

    private $source;

    public function setSource($source): void
    {
        $this->source = $source;
        $this->apiParas['source'] = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

    private $deviceName;

    public function setDeviceName($deviceName): void
    {
        $this->deviceName = $deviceName;
        $this->apiParas['deviceName'] = $deviceName;
    }

    public function getDeviceName()
    {
        return $this->deviceName;
    }

    private $email;

    public function setEmail($email): void
    {
        $this->email = $email;
        $this->apiParas['email'] = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    private $deviceOSVersion;

    public function setDeviceOSVersion($deviceOSVersion): void
    {
        $this->deviceOSVersion = $deviceOSVersion;
        $this->apiParas['deviceOSVersion'] = $deviceOSVersion;
    }

    public function getDeviceOSVersion()
    {
        return $this->deviceOSVersion;
    }

    private $pin;

    public function setPin($pin): void
    {
        $this->pin = $pin;
        $this->apiParas['pin'] = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

    private $appVersion;

    public function setAppVersion($appVersion): void
    {
        $this->appVersion = $appVersion;
        $this->apiParas['appVersion'] = $appVersion;
    }

    public function getAppVersion()
    {
        return $this->appVersion;
    }

    private $loginChannel;

    public function setLoginChannel($loginChannel): void
    {
        $this->loginChannel = $loginChannel;
        $this->apiParas['loginChannel'] = $loginChannel;
    }

    public function getLoginChannel()
    {
        return $this->loginChannel;
    }

    private $authType;

    public function setAuthType($authType): void
    {
        $this->authType = $authType;
        $this->apiParas['authType'] = $authType;
    }

    public function getAuthType()
    {
        return $this->authType;
    }

    private $clientIp;

    public function setClientIp($clientIp): void
    {
        $this->clientIp = $clientIp;
        $this->apiParas['clientIp'] = $clientIp;
    }

    public function getClientIp()
    {
        return $this->clientIp;
    }

    private $uuid;

    public function setUuid($uuid): void
    {
        $this->uuid = $uuid;
        $this->apiParas['uuid'] = $uuid;
    }

    public function getUuid()
    {
        return $this->uuid;
    }

    private $mobile;

    public function setMobile($mobile): void
    {
        $this->mobile = $mobile;
        $this->apiParas['mobile'] = $mobile;
    }

    public function getMobile()
    {
        return $this->mobile;
    }
}
