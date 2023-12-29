<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenBatchConvertCpslink;

class KeplerUrlparam
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.jop.console.jsf.domain.KeplerUrlparam';
    }

    private $urls;

    public function setUrls($urls): void
    {
        $this->params['urls'] = $urls;
    }

    public function getUrls()
    {
        return $this->urls;
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

    private $appKey;

    public function setAppKey($appKey): void
    {
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey()
    {
        return $this->appKey;
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

    private $jdShortUrl;

    public function setJdShortUrl($jdShortUrl): void
    {
        $this->params['jdShortUrl'] = $jdShortUrl;
    }

    public function getJdShortUrl()
    {
        return $this->jdShortUrl;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
