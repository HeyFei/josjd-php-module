<?php

declare(strict_types=1);

namespace LZJos\Request;

class KplOpenJdrepairSaveaddressRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kpl.open.jdrepair.saveaddress';
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

    private $addressId;

    public function setAddressId($addressId): void
    {
        $this->apiParas['addressId'] = $addressId;
    }

    public function getAddressId()
    {
        return $this->apiParas['addressId'];
    }

    private $state;

    public function setState($state): void
    {
        $this->apiParas['state'] = $state;
    }

    public function getState()
    {
        return $this->apiParas['state'];
    }
}
