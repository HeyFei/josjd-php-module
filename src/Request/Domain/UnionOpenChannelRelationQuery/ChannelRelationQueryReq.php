<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenChannelRelationQuery;

class ChannelRelationQueryReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.channel.relation.ChannelRelationQueryReq';
    }

    private $pageIndex;

    public function setPageIndex($pageIndex): void
    {
        $this->params['pageIndex'] = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    private $pageSize;

    public function setPageSize($pageSize): void
    {
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    private $channelId;

    public function setChannelId($channelId): void
    {
        $this->params['channelId'] = $channelId;
    }

    public function getChannelId()
    {
        return $this->channelId;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
