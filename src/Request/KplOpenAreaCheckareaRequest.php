<?php

declare(strict_types=1);

namespace LZJos\Request;

class KplOpenAreaCheckareaRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kpl.open.area.checkarea';
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

    private $provinceId;

    public function setProvinceId($provinceId): void
    {
        $this->apiParas['provinceId'] = $provinceId;
    }

    public function getProvinceId()
    {
        return $this->apiParas['provinceId'];
    }

    private $cityId;

    public function setCityId($cityId): void
    {
        $this->apiParas['cityId'] = $cityId;
    }

    public function getCityId()
    {
        return $this->apiParas['cityId'];
    }

    private $countyId;

    public function setCountyId($countyId): void
    {
        $this->apiParas['countyId'] = $countyId;
    }

    public function getCountyId()
    {
        return $this->apiParas['countyId'];
    }

    private $townId;

    public function setTownId($townId): void
    {
        $this->apiParas['townId'] = $townId;
    }

    public function getTownId()
    {
        return $this->apiParas['townId'];
    }
}
