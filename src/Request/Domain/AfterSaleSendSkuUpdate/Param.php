<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\AfterSaleSendSkuUpdate;

class Param
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.SendSkuUpdateParamReqVo';
    }

    private $afsServiceId;

    public function setAfsServiceId($afsServiceId): void
    {
        $this->params['afsServiceId'] = $afsServiceId;
    }

    public function getAfsServiceId()
    {
        return $this->afsServiceId;
    }

    private $deliverDate;

    public function setDeliverDate($deliverDate): void
    {
        $this->params['deliverDate'] = $deliverDate;
    }

    public function getDeliverDate()
    {
        return $this->deliverDate;
    }

    private $expressCode;

    public function setExpressCode($expressCode): void
    {
        $this->params['expressCode'] = $expressCode;
    }

    public function getExpressCode()
    {
        return $this->expressCode;
    }

    private $expressCompany;

    public function setExpressCompany($expressCompany): void
    {
        $this->params['expressCompany'] = $expressCompany;
    }

    public function getExpressCompany()
    {
        return $this->expressCompany;
    }

    private $freightMoney;

    public function setFreightMoney($freightMoney): void
    {
        $this->params['freightMoney'] = $freightMoney;
    }

    public function getFreightMoney()
    {
        return $this->freightMoney;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
