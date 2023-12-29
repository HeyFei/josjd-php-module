<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenRegularPlanQueryplanlistnew;

class PlanParam
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.purchase.regular.api.domain.plan.PlanParam';
    }

    private $startRow;

    public function setStartRow($startRow): void
    {
        $this->params['startRow'] = $startRow;
    }

    public function getStartRow()
    {
        return $this->startRow;
    }

    private $pageSize;

    public function setPageSize($pageSize): void
    {
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
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

    private $planNumber;

    public function setPlanNumber($planNumber): void
    {
        $this->params['planNumber'] = $planNumber;
    }

    public function getPlanNumber()
    {
        return $this->planNumber;
    }

    private $payMode;

    public function setPayMode($payMode): void
    {
        $this->params['payMode'] = $payMode;
    }

    public function getPayMode()
    {
        return $this->payMode;
    }

    private $skuId;

    public function setSkuId($skuId): void
    {
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    private $planStartTime;

    public function setPlanStartTime($planStartTime): void
    {
        $this->params['planStartTime'] = $planStartTime;
    }

    public function getPlanStartTime()
    {
        return $this->planStartTime;
    }

    private $planEndTime;

    public function setPlanEndTime($planEndTime): void
    {
        $this->params['planEndTime'] = $planEndTime;
    }

    public function getPlanEndTime()
    {
        return $this->planEndTime;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
