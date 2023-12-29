<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\AfterSaleAfsApplyCreate;

class AsPickwareDto
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.AfterSalePickwareDto';
    }

    private $pickwareType;

    public function setPickwareType($pickwareType): void
    {
        $this->params['pickwareType'] = $pickwareType;
    }

    public function getPickwareType()
    {
        return $this->pickwareType;
    }

    private $pickwareProvince;

    public function setPickwareProvince($pickwareProvince): void
    {
        $this->params['pickwareProvince'] = $pickwareProvince;
    }

    public function getPickwareProvince()
    {
        return $this->pickwareProvince;
    }

    private $pickwareCity;

    public function setPickwareCity($pickwareCity): void
    {
        $this->params['pickwareCity'] = $pickwareCity;
    }

    public function getPickwareCity()
    {
        return $this->pickwareCity;
    }

    private $pickwareCounty;

    public function setPickwareCounty($pickwareCounty): void
    {
        $this->params['pickwareCounty'] = $pickwareCounty;
    }

    public function getPickwareCounty()
    {
        return $this->pickwareCounty;
    }

    private $pickwareVillage;

    public function setPickwareVillage($pickwareVillage): void
    {
        $this->params['pickwareVillage'] = $pickwareVillage;
    }

    public function getPickwareVillage()
    {
        return $this->pickwareVillage;
    }

    private $pickwareAddress;

    public function setPickwareAddress($pickwareAddress): void
    {
        $this->params['pickwareAddress'] = $pickwareAddress;
    }

    public function getPickwareAddress()
    {
        return $this->pickwareAddress;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
