<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenCouponGiftGet;

class CouponReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.coupon.gift.CreateGiftCouponReq';
    }

    private $skuMaterialId;

    public function setSkuMaterialId($skuMaterialId): void
    {
        $this->params['skuMaterialId'] = $skuMaterialId;
    }

    public function getSkuMaterialId()
    {
        return $this->skuMaterialId;
    }

    private $discount;

    public function setDiscount($discount): void
    {
        $this->params['discount'] = $discount;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    private $amount;

    public function setAmount($amount): void
    {
        $this->params['amount'] = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    private $receiveStartTime;

    public function setReceiveStartTime($receiveStartTime): void
    {
        $this->params['receiveStartTime'] = $receiveStartTime;
    }

    public function getReceiveStartTime()
    {
        return $this->receiveStartTime;
    }

    private $receiveEndTime;

    public function setReceiveEndTime($receiveEndTime): void
    {
        $this->params['receiveEndTime'] = $receiveEndTime;
    }

    public function getReceiveEndTime()
    {
        return $this->receiveEndTime;
    }

    private $effectiveDays;

    public function setEffectiveDays($effectiveDays): void
    {
        $this->params['effectiveDays'] = $effectiveDays;
    }

    public function getEffectiveDays()
    {
        return $this->effectiveDays;
    }

    private $isSpu;

    public function setIsSpu($isSpu): void
    {
        $this->params['isSpu'] = $isSpu;
    }

    public function getIsSpu()
    {
        return $this->isSpu;
    }

    private $expireType;

    public function setExpireType($expireType): void
    {
        $this->params['expireType'] = $expireType;
    }

    public function getExpireType()
    {
        return $this->expireType;
    }

    private $useStartTime;

    public function setUseStartTime($useStartTime): void
    {
        $this->params['useStartTime'] = $useStartTime;
    }

    public function getUseStartTime()
    {
        return $this->useStartTime;
    }

    private $useEndTime;

    public function setUseEndTime($useEndTime): void
    {
        $this->params['useEndTime'] = $useEndTime;
    }

    public function getUseEndTime()
    {
        return $this->useEndTime;
    }

    private $share;

    public function setShare($share): void
    {
        $this->params['share'] = $share;
    }

    public function getShare()
    {
        return $this->share;
    }

    private $contentMatch;

    public function setContentMatch($contentMatch): void
    {
        $this->params['contentMatch'] = $contentMatch;
    }

    public function getContentMatch()
    {
        return $this->contentMatch;
    }

    private $couponTitle;

    public function setCouponTitle($couponTitle): void
    {
        $this->params['couponTitle'] = $couponTitle;
    }

    public function getCouponTitle()
    {
        return $this->couponTitle;
    }

    private $contentMatchMedias;

    public function setContentMatchMedias($contentMatchMedias): void
    {
        $this->params['contentMatchMedias'] = $contentMatchMedias;
    }

    public function getContentMatchMedias()
    {
        return $this->contentMatchMedias;
    }

    private $showInMedias;

    public function setShowInMedias($showInMedias): void
    {
        $this->params['showInMedias'] = $showInMedias;
    }

    public function getShowInMedias()
    {
        return $this->showInMedias;
    }

    private $targetType;

    public function setTargetType($targetType): void
    {
        $this->params['targetType'] = $targetType;
    }

    public function getTargetType()
    {
        return $this->targetType;
    }

    private $childPromoters;

    public function setChildPromoters($childPromoters): void
    {
        $this->params['childPromoters'] = $childPromoters;
    }

    public function getChildPromoters()
    {
        return $this->childPromoters;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
