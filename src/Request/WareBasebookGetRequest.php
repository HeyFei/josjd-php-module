<?php

declare(strict_types=1);

namespace LZJos\Request;

class WareBasebookGetRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.ware.basebook.get';
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

    private $skuId;

    public function setSkuId($skuId): void
    {
        $this->skuId = $skuId;
        $this->apiParas['sku_id'] = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }
}
