<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenStatisticsGiftcouponQuery;

class EffectDataReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.statistics.GiftCouponEffectDataReq';
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

    private $giftCouponKey;

    public function setGiftCouponKey($giftCouponKey): void
    {
        $this->params['giftCouponKey'] = $giftCouponKey;
    }

    public function getGiftCouponKey()
    {
        return $this->giftCouponKey;
    }

    private $createTime;

    public function setCreateTime($createTime): void
    {
        $this->params['createTime'] = $createTime;
    }

    public function getCreateTime()
    {
        return $this->createTime;
    }

    private $startTime;

    public function setStartTime($startTime): void
    {
        $this->params['startTime'] = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    private $key;

    public function setKey($key): void
    {
        $this->params['key'] = $key;
    }

    public function getKey()
    {
        return $this->key;
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

    public function getInstance()
    {
        return $this->params;
    }
}
