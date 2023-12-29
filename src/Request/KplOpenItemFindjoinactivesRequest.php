<?php

declare(strict_types=1);

namespace LZJos\Request;

class KplOpenItemFindjoinactivesRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kpl.open.item.findjoinactives';
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

    private $uid;

    public function setUid($uid): void
    {
        $this->apiParas['uid'] = $uid;
    }

    public function getUid()
    {
        return $this->apiParas['uid'];
    }

    private $cid;

    public function setCid($cid): void
    {
        $this->apiParas['cid'] = $cid;
    }

    public function getCid()
    {
        return $this->apiParas['cid'];
    }

    private $sku;

    public function setSku($sku): void
    {
        $this->apiParas['sku'] = $sku;
    }

    public function getSku()
    {
        return $this->apiParas['sku'];
    }

    private $venderId;

    public function setVenderId($venderId): void
    {
        $this->apiParas['venderId'] = $venderId;
    }

    public function getVenderId()
    {
        return $this->apiParas['venderId'];
    }
}
