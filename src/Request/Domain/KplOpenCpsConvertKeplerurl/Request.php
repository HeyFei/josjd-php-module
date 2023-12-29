<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenCpsConvertKeplerurl;

class Request
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.jop.console.jsf.domain.GenKeplerUrlRequest';
    }

    private $sourceEmt;

    public function setSourceEmt($sourceEmt): void
    {
        $this->params['sourceEmt'] = $sourceEmt;
    }

    public function getSourceEmt()
    {
        return $this->sourceEmt;
    }

    private $unionId;

    public function setUnionId($unionId): void
    {
        $this->params['unionId'] = $unionId;
    }

    public function getUnionId()
    {
        return $this->unionId;
    }

    private $webId;

    public function setWebId($webId): void
    {
        $this->params['webId'] = $webId;
    }

    public function getWebId()
    {
        return $this->webId;
    }

    private $skuList;

    public function setSkuList($skuList): void
    {
        $this->params['skuList'] = $skuList;
    }

    public function getSkuList()
    {
        return $this->skuList;
    }

    private $appKey;

    public function setAppKey($appKey): void
    {
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey()
    {
        return $this->appKey;
    }

    private $type;

    public function setType($type): void
    {
        $this->params['type'] = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    private $subUnionId;

    public function setSubUnionId($subUnionId): void
    {
        $this->params['subUnionId'] = $subUnionId;
    }

    public function getSubUnionId()
    {
        return $this->subUnionId;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
