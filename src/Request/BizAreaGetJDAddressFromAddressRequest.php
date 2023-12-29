<?php

declare(strict_types=1);

namespace LZJos\Request;

class BizAreaGetJDAddressFromAddressRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.biz.area.getJDAddressFromAddress';
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

    private $address;

    public function setAddress($address): void
    {
        $this->address = $address;
        $this->apiParas['address'] = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }
}
