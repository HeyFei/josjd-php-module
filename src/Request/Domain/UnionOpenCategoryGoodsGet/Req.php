<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenCategoryGoodsGet;

class Req
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.category.base.CategoryReq';
    }

    private $parentId;

    public function setParentId($parentId): void
    {
        $this->params['parentId'] = $parentId;
    }

    public function getParentId()
    {
        return $this->parentId;
    }

    private $grade;

    public function setGrade($grade): void
    {
        $this->params['grade'] = $grade;
    }

    public function getGrade()
    {
        return $this->grade;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
