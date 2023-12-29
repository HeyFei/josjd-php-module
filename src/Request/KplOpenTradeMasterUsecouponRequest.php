<?php

declare(strict_types=1);

namespace LZJos\Request;

class KplOpenTradeMasterUsecouponRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kpl.open.trade.master.usecoupon';
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

    private $client;

    public function setClient($client): void
    {
        $this->apiParas['client'] = $client;
    }

    public function getClient()
    {
        return $this->apiParas['client'];
    }

    private $couponKey;

    public function setCouponKey($couponKey): void
    {
        $this->apiParas['couponKey'] = $couponKey;
    }

    public function getCouponKey()
    {
        return $this->apiParas['couponKey'];
    }
}
