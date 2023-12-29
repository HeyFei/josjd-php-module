<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenCouponGiftStop;

class CouponReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.coupon.gift.StopGiftCouponReq';
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

    public function getInstance()
    {
        return $this->params;
    }
}
