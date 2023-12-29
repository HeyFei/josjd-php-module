<?php

declare(strict_types=1);

namespace LZJos\Request;

class KeplerTradeSubmitRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kepler.trade.submit';
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

    private $cartReq;

    public function setCartReq($cartReq): void
    {
        $this->apiParas['cartReq'] = $cartReq;
    }

    public function getCartReq()
    {
        return $this->apiParas['cartReq'];
    }

    private $orderParam;

    public function setOrderParam($orderParam): void
    {
        $this->apiParas['orderParam'] = $orderParam;
    }

    public function getOrderParam()
    {
        return $this->apiParas['orderParam'];
    }
}
