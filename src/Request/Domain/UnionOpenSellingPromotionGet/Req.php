<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenSellingPromotionGet;

class Req
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.promotion.base.PromotionCodeReq';
    }

    private $materialId;

    public function setMaterialId($materialId): void
    {
        $this->params['materialId'] = $materialId;
    }

    public function getMaterialId()
    {
        return $this->materialId;
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

    private $chainType;

    public function setChainType($chainType): void
    {
        $this->params['chainType'] = $chainType;
    }

    public function getChainType()
    {
        return $this->chainType;
    }

    private $couponUrl;

    public function setCouponUrl($couponUrl): void
    {
        $this->params['couponUrl'] = $couponUrl;
    }

    public function getCouponUrl()
    {
        return $this->couponUrl;
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

    private $subUnionId;

    public function setSubUnionId($subUnionId): void
    {
        $this->params['subUnionId'] = $subUnionId;
    }

    public function getSubUnionId()
    {
        return $this->subUnionId;
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

    private $pid;

    public function setPid($pid): void
    {
        $this->params['pid'] = $pid;
    }

    public function getPid()
    {
        return $this->pid;
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

    public function getInstance()
    {
        return $this->params;
    }
}
