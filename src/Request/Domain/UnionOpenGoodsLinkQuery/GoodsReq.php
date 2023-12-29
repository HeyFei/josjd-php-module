<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenGoodsLinkQuery;

class GoodsReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.goods.link.LinkGoodsReq';
    }

    private $url;

    public function setUrl($url): void
    {
        $this->params['url'] = $url;
    }

    public function getUrl()
    {
        return $this->url;
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

    private $pid;

    public function setPid($pid): void
    {
        $this->params['pid'] = $pid;
    }

    public function getPid()
    {
        return $this->pid;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
