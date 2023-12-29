<?php

declare(strict_types=1);

namespace LZJos\Request;

class UnionOpenPositionQueryRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.union.open.position.query';
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

    private $positionReq;

    public function setPositionReq($positionReq): void
    {
        $this->apiParas['positionReq'] = $positionReq;
    }

    public function getPositionReq()
    {
        return $this->apiParas['positionReq'];
    }
}
