<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\OpenOrderSplitDeliverNew;

class DeliverInfo
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.gongxiao.kepler.domain.DeliverInfo';
    }

    private $deliveryId;

    public function setDeliveryId($deliveryId): void
    {
        $this->params['deliveryId'] = $deliveryId;
    }

    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    private $shipmentType;

    public function setShipmentType($shipmentType): void
    {
        $this->params['shipmentType'] = $shipmentType;
    }

    public function getShipmentType()
    {
        return $this->shipmentType;
    }

    private $logiCompany;

    public function setLogiCompany($logiCompany): void
    {
        $this->params['logiCompany'] = $logiCompany;
    }

    public function getLogiCompany()
    {
        return $this->logiCompany;
    }

    private $customerCode;

    public function setCustomerCode($customerCode): void
    {
        $this->params['customerCode'] = $customerCode;
    }

    public function getCustomerCode()
    {
        return $this->customerCode;
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

    public function getInstance()
    {
        return $this->params;
    }
}
