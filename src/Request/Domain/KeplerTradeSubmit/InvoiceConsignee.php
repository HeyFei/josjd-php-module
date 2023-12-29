<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerTradeSubmit;

class InvoiceConsignee
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.InvoiceConsigneeParam';
    }

    private $consigneeName;

    public function setConsigneeName($consigneeName): void
    {
        $this->params['consigneeName'] = $consigneeName;
    }

    public function getConsigneeName()
    {
        return $this->consigneeName;
    }

    private $provinceId;

    public function setProvinceId($provinceId): void
    {
        $this->params['provinceId'] = $provinceId;
    }

    public function getProvinceId()
    {
        return $this->provinceId;
    }

    private $province;

    public function setProvince($province): void
    {
        $this->params['province'] = $province;
    }

    public function getProvince()
    {
        return $this->province;
    }

    private $cityId;

    public function setCityId($cityId): void
    {
        $this->params['cityId'] = $cityId;
    }

    public function getCityId()
    {
        return $this->cityId;
    }

    private $city;

    public function setCity($city): void
    {
        $this->params['city'] = $city;
    }

    public function getCity()
    {
        return $this->city;
    }

    private $countyId;

    public function setCountyId($countyId): void
    {
        $this->params['countyId'] = $countyId;
    }

    public function getCountyId()
    {
        return $this->countyId;
    }

    private $county;

    public function setCounty($county): void
    {
        $this->params['county'] = $county;
    }

    public function getCounty()
    {
        return $this->county;
    }

    private $townId;

    public function setTownId($townId): void
    {
        $this->params['townId'] = $townId;
    }

    public function getTownId()
    {
        return $this->townId;
    }

    private $town;

    public function setTown($town): void
    {
        $this->params['town'] = $town;
    }

    public function getTown()
    {
        return $this->town;
    }

    private $phone;

    public function setPhone($phone): void
    {
        $this->params['phone'] = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    private $address;

    public function setAddress($address): void
    {
        $this->params['address'] = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
