<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenGoodsJingfenQuery;

class GoodsReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.goods.jingfen.JFGoodsReq';
    }

    private $eliteId;

    public function setEliteId($eliteId): void
    {
        $this->params['eliteId'] = $eliteId;
    }

    public function getEliteId()
    {
        return $this->eliteId;
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

    private $sortName;

    public function setSortName($sortName): void
    {
        $this->params['sortName'] = $sortName;
    }

    public function getSortName()
    {
        return $this->sortName;
    }

    private $sort;

    public function setSort($sort): void
    {
        $this->params['sort'] = $sort;
    }

    public function getSort()
    {
        return $this->sort;
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

    private $fields;

    public function setFields($fields): void
    {
        $this->params['fields'] = $fields;
    }

    public function getFields()
    {
        return $this->fields;
    }

    private $forbidTypes;

    public function setForbidTypes($forbidTypes): void
    {
        $this->params['forbidTypes'] = $forbidTypes;
    }

    public function getForbidTypes()
    {
        return $this->forbidTypes;
    }

    private $groupId;

    public function setGroupId($groupId): void
    {
        $this->params['groupId'] = $groupId;
    }

    public function getGroupId()
    {
        return $this->groupId;
    }

    private $ownerUnionId;

    public function setOwnerUnionId($ownerUnionId): void
    {
        $this->params['ownerUnionId'] = $ownerUnionId;
    }

    public function getOwnerUnionId()
    {
        return $this->ownerUnionId;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
