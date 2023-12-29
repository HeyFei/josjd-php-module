<?php

declare(strict_types=1);

namespace LZJos\Request;

class WirelessWarePriceGetRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.wireless.ware.price.get';
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

    private $skuIds;

    public function setSkuIds($skuIds): void
    {
        $this->skuIds = $skuIds;
        $this->apiParas['sku_ids'] = $skuIds;
    }

    public function getSkuIds()
    {
        return $this->skuIds;
    }

    private $origin;

    public function setOrigin($origin): void
    {
        $this->origin = $origin;
        $this->apiParas['origin'] = $origin;
    }

    public function getOrigin()
    {
        return $this->origin;
    }
}
