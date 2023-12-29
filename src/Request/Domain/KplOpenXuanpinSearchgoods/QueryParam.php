<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenXuanpinSearchgoods;

class QueryParam
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kepler.xuanpin.export.domain.qq.QueryParam';
    }

    private $keywords;

    public function setKeywords($keywords): void
    {
        $this->params['keywords'] = $keywords;
    }

    public function getKeywords()
    {
        return $this->keywords;
    }

    private $skuId;

    public function setSkuId($skuId): void
    {
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
