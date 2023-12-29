<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenRegularPlanShipmentorder;

class ShipmentParam
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.purchase.regular.api.domain.plan.ShipmentParam';
    }

    private $venderId;

    public function setVenderId($venderId): void
    {
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId()
    {
        return $this->venderId;
    }

    private $planId;

    public function setPlanId($planId): void
    {
        $this->params['planId'] = $planId;
    }

    public function getPlanId()
    {
        return $this->planId;
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

    private $logiCoprId;

    public function setLogiCoprId($logiCoprId): void
    {
        $this->params['logiCoprId'] = $logiCoprId;
    }

    public function getLogiCoprId()
    {
        return $this->logiCoprId;
    }

    private $logiNo;

    public function setLogiNo($logiNo): void
    {
        $this->params['logiNo'] = $logiNo;
    }

    public function getLogiNo()
    {
        return $this->logiNo;
    }

    private $installId;

    public function setInstallId($installId): void
    {
        $this->params['installId'] = $installId;
    }

    public function getInstallId()
    {
        return $this->installId;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
