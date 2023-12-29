<?php

declare(strict_types=1);

namespace LZJos\Request;

class KeplerXuanpinSkuPromotionBatchRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kepler.xuanpin.sku.promotion.batch';
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
        $this->apiParas['skuIds'] = $skuIds;
    }

    public function getSkuIds()
    {
        return $this->apiParas['skuIds'];
    }
}
