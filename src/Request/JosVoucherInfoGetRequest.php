<?php

declare(strict_types=1);

namespace LZJos\Request;

class JosVoucherInfoGetRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.jos.voucher.info.get';
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
}
