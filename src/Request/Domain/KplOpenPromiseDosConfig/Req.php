<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenPromiseDosConfig;

class Req
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.promise.dos.domain.delivery.ZxjDeliveryRequest';
    }

    private $source;

    public function setSource($source): void
    {
        $this->params['source'] = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

    private $pin;

    public function setPin($pin): void
    {
        $this->params['pin'] = $pin;
    }

    public function getPin()
    {
        return $this->pin;
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

    private $cityId;

    public function setCityId($cityId): void
    {
        $this->params['cityId'] = $cityId;
    }

    public function getCityId()
    {
        return $this->cityId;
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

    private $townId;

    public function setTownId($townId): void
    {
        $this->params['townId'] = $townId;
    }

    public function getTownId()
    {
        return $this->townId;
    }

    private $skuProperties;

    public function setSkuProperties($skuProperties): void
    {
        $size = \count($skuProperties);
        for ($i = 0; $i < $size; ++$i) {
            $skuProperties[$i] = $skuProperties[$i]->getInstance()
            ;
        }
        $this->params['skuProperties'] = $skuProperties;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
