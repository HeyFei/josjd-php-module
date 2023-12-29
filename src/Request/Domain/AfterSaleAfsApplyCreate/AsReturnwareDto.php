<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\AfterSaleAfsApplyCreate;

class AsReturnwareDto
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.AfterSaleReturnwareDto';
    }

    private $returnwareType;

    public function setReturnwareType($returnwareType): void
    {
        $this->params['returnwareType'] = $returnwareType;
    }

    public function getReturnwareType()
    {
        return $this->returnwareType;
    }

    private $returnwareProvince;

    public function setReturnwareProvince($returnwareProvince): void
    {
        $this->params['returnwareProvince'] = $returnwareProvince;
    }

    public function getReturnwareProvince()
    {
        return $this->returnwareProvince;
    }

    private $returnwareCity;

    public function setReturnwareCity($returnwareCity): void
    {
        $this->params['returnwareCity'] = $returnwareCity;
    }

    public function getReturnwareCity()
    {
        return $this->returnwareCity;
    }

    private $returnwareCounty;

    public function setReturnwareCounty($returnwareCounty): void
    {
        $this->params['returnwareCounty'] = $returnwareCounty;
    }

    public function getReturnwareCounty()
    {
        return $this->returnwareCounty;
    }

    private $returnwareVillage;

    public function setReturnwareVillage($returnwareVillage): void
    {
        $this->params['returnwareVillage'] = $returnwareVillage;
    }

    public function getReturnwareVillage()
    {
        return $this->returnwareVillage;
    }

    private $returnwareAddress;

    public function setReturnwareAddress($returnwareAddress): void
    {
        $this->params['returnwareAddress'] = $returnwareAddress;
    }

    public function getReturnwareAddress()
    {
        return $this->returnwareAddress;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
