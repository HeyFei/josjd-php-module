<?php

declare(strict_types=1);

namespace LZJos\Request;

class WareProductsortGetRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.ware.productsort.get';
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

    private $productSortIds;

    public function setProductSortIds($productSortIds): void
    {
        $this->productSortIds = $productSortIds;
        $this->apiParas['product_sort_ids'] = $productSortIds;
    }

    public function getProductSortIds()
    {
        return $this->productSortIds;
    }
}
