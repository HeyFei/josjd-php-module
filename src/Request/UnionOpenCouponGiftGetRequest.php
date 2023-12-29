<?php

declare(strict_types=1);

namespace LZJos\Request;

class UnionOpenCouponGiftGetRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.union.open.coupon.gift.get';
    }

    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return '{}';
        }

        return json_encode($this->apiParas);
    }

    public function check(): void
    {
    }

    public function putOtherTextParam($key, $value): void
    {
        $this->apiParas[$key] = $value;
        $this->{$key} = $value;
    }

    private $version;

    public function setVersion($version): void
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }

    private $couponReq;

    public function setCouponReq($couponReq): void
    {
        $this->apiParas['couponReq'] = $couponReq;
    }

    public function getCouponReq()
    {
        return $this->apiParas['couponReq'];
    }
}
