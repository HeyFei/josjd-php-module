<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\OpenOrderSplitDeliverNew;

class OrderExtInfo
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.gongxiao.kepler.domain.OrderExtInfo';
    }

    private $orderAmount;

    public function setOrderAmount($orderAmount): void
    {
        $this->params['orderAmount'] = $orderAmount;
    }

    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    private $sendTime;

    public function setSendTime($sendTime): void
    {
        $this->params['sendTime'] = $sendTime;
    }

    public function getSendTime()
    {
        return $this->sendTime;
    }

    private $skuList;

    public function setSkuList($skuList): void
    {
        $size = \count($skuList);
        for ($i = 0; $i < $size; ++$i) {
            $skuList[$i] = $skuList[$i]->getInstance()
            ;
        }
        $this->params['skuList'] = $skuList;
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

    public function getInstance()
    {
        return $this->params;
    }
}
