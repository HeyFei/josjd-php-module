<?php

declare(strict_types=1);

namespace LZJos\Request;

class JosSecretApiReportGetRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.jos.secret.api.report.get';
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

    private $accessToken;

    public function setAccessToken($accessToken): void
    {
        $this->accessToken = $accessToken;
        $this->apiParas['access_token'] = $accessToken;
    }

    public function getAccessToken()
    {
        return $this->accessToken;
    }

    private $businessId;

    public function setBusinessId($businessId): void
    {
        $this->businessId = $businessId;
        $this->apiParas['businessId'] = $businessId;
    }

    public function getBusinessId()
    {
        return $this->businessId;
    }

    private $text;

    public function setText($text): void
    {
        $this->text = $text;
        $this->apiParas['text'] = $text;
    }

    public function getText()
    {
        return $this->text;
    }

    private $attribute;

    public function setAttribute($attribute): void
    {
        $this->attribute = $attribute;
        $this->apiParas['attribute'] = $attribute;
    }

    public function getAttribute()
    {
        return $this->attribute;
    }

    private $customerUserId;

    public function setCustomerUserId($customerUserId): void
    {
        $this->customerUserId = $customerUserId;
        $this->apiParas['customer_user_id'] = $customerUserId;
    }

    public function getCustomerUserId()
    {
        return $this->customerUserId;
    }

    private $serverUrl;

    public function setServerUrl($serverUrl): void
    {
        $this->serverUrl = $serverUrl;
        $this->apiParas['server_url'] = $serverUrl;
    }

    public function getServerUrl()
    {
        return $this->serverUrl;
    }
}
