<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenPromotionBysubunionidGet;

class PromotionCodeReq
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

    private $subUnionId;

    public function setSubUnionId($subUnionId): void
    {
        $this->params['subUnionId'] = $subUnionId;
    }

    public function getSubUnionId()
    {
        return $this->subUnionId;
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

    private $pid;

    public function setPid($pid): void
    {
        $this->params['pid'] = $pid;
    }

    public function getPid()
    {
        return $this->pid;
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

    private $chainType;

    public function setChainType($chainType): void
    {
        $this->params['chainType'] = $chainType;
    }

    public function getChainType()
    {
        return $this->chainType;
    }

    private $giftCouponKey;

    public function setGiftCouponKey($giftCouponKey): void
    {
        $this->params['giftCouponKey'] = $giftCouponKey;
    }

    public function getGiftCouponKey()
    {
        return $this->giftCouponKey;
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
