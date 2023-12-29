<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenPromotionToolsIntelligenceQuery;

class Req
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.promotion.intelligence.ToolsIntelligencePromotionReq';
    }

    private $title;

    public function setTitle($title): void
    {
        $this->params['title'] = $title;
    }

    public function getTitle()
    {
        return $this->title;
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

    private $cid1List;

    public function setCid1List($cid1List): void
    {
        $this->params['cid1List'] = $cid1List;
    }

    public function getCid1List()
    {
        return $this->cid1List;
    }

    private $status;

    public function setStatus($status): void
    {
        $this->params['status'] = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    private $essence;

    public function setEssence($essence): void
    {
        $this->params['essence'] = $essence;
    }

    public function getEssence()
    {
        return $this->essence;
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

    private $unionId;

    public function setUnionId($unionId): void
    {
        $this->params['unionId'] = $unionId;
    }

    public function getUnionId()
    {
        return $this->unionId;
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

    private $subUnionId;

    public function setSubUnionId($subUnionId): void
    {
        $this->params['subUnionId'] = $subUnionId;
    }

    public function getSubUnionId()
    {
        return $this->subUnionId;
    }

    private $siteId;

    public function setSiteId($siteId): void
    {
        $this->params['siteId'] = $siteId;
    }

    public function getSiteId()
    {
        return $this->siteId;
    }

    private $positionId;

    public function setPositionId($positionId): void
    {
        $this->params['positionId'] = $positionId;
    }

    public function getPositionId()
    {
        return $this->positionId;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
