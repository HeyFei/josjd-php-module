<?php

declare(strict_types=1);

namespace LZJos\Request;

class KeplerItemQueryskusbycatidRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kepler.item.queryskusbycatid';
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

    private $catId;

    public function setCatId($catId): void
    {
        $this->apiParas['catId'] = $catId;
    }

    public function getCatId()
    {
        return $this->apiParas['catId'];
    }

    private $scrollId;

    public function setScrollId($scrollId): void
    {
        $this->apiParas['scrollId'] = $scrollId;
    }

    public function getScrollId()
    {
        return $this->apiParas['scrollId'];
    }
}
