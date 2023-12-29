<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenGoodsMaterialQuery;

class GoodsReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.goods.material.MaterialGoodsReq';
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

    private $ext1;

    public function setExt1($ext1): void
    {
        $this->params['ext1'] = $ext1;
    }

    public function getExt1()
    {
        return $this->ext1;
    }

    private $skuId;

    public function setSkuId($skuId): void
    {
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    private $hasCoupon;

    public function setHasCoupon($hasCoupon): void
    {
        $this->params['hasCoupon'] = $hasCoupon;
    }

    public function getHasCoupon()
    {
        return $this->hasCoupon;
    }

    private $userIdType;

    public function setUserIdType($userIdType): void
    {
        $this->params['userIdType'] = $userIdType;
    }

    public function getUserIdType()
    {
        return $this->userIdType;
    }

    private $userId;

    public function setUserId($userId): void
    {
        $this->params['userId'] = $userId;
    }

    public function getUserId()
    {
        return $this->userId;
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

    private $orderId;

    public function setOrderId($orderId): void
    {
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
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

    private $benefitType;

    public function setBenefitType($benefitType): void
    {
        $this->params['benefitType'] = $benefitType;
    }

    public function getBenefitType()
    {
        return $this->benefitType;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
