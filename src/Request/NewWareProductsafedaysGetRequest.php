<?php

declare(strict_types=1);

namespace LZJos\Request;

class NewWareProductsafedaysGetRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.new.ware.productsafedays.get';
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

    private $skuid;

    public function setSkuid($skuid): void
    {
        $this->skuid = $skuid;
        $this->apiParas['skuid'] = $skuid;
    }

    public function getSkuid()
    {
        return $this->skuid;
    }
}
