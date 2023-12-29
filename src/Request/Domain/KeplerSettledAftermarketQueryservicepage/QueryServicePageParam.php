<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerSettledAftermarketQueryservicepage;

class QueryServicePageParam
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kepler.trade.sdk.export.aftermarket.domain.QueryServicePageParam';
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

    private $buId;

    public function setBuId($buId): void
    {
        $this->params['buId'] = $buId;
    }

    public function getBuId()
    {
        return $this->buId;
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

    private $wareId;

    public function setWareId($wareId): void
    {
        $this->params['wareId'] = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    private $afsApplyTimeBegin;

    public function setAfsApplyTimeBegin($afsApplyTimeBegin): void
    {
        $this->params['afsApplyTimeBegin'] = $afsApplyTimeBegin;
    }

    public function getAfsApplyTimeBegin()
    {
        return $this->afsApplyTimeBegin;
    }

    private $afsApplyTimeEnd;

    public function setAfsApplyTimeEnd($afsApplyTimeEnd): void
    {
        $this->params['afsApplyTimeEnd'] = $afsApplyTimeEnd;
    }

    public function getAfsApplyTimeEnd()
    {
        return $this->afsApplyTimeEnd;
    }

    private $approvedDateBegin;

    public function setApprovedDateBegin($approvedDateBegin): void
    {
        $this->params['approvedDateBegin'] = $approvedDateBegin;
    }

    public function getApprovedDateBegin()
    {
        return $this->approvedDateBegin;
    }

    private $approvedDateEnd;

    public function setApprovedDateEnd($approvedDateEnd): void
    {
        $this->params['approvedDateEnd'] = $approvedDateEnd;
    }

    public function getApprovedDateEnd()
    {
        return $this->approvedDateEnd;
    }

    private $trackPin;

    public function setTrackPin($trackPin): void
    {
        $this->params['trackPin'] = $trackPin;
    }

    public function getTrackPin()
    {
        return $this->trackPin;
    }

    private $customerPin;

    public function setCustomerPin($customerPin): void
    {
        $this->params['customerPin'] = $customerPin;
    }

    public function getCustomerPin()
    {
        return $this->customerPin;
    }

    private $customerName;

    public function setCustomerName($customerName): void
    {
        $this->params['customerName'] = $customerName;
    }

    public function getCustomerName()
    {
        return $this->customerName;
    }

    private $customerTel;

    public function setCustomerTel($customerTel): void
    {
        $this->params['customerTel'] = $customerTel;
    }

    public function getCustomerTel()
    {
        return $this->customerTel;
    }

    private $orderType;

    public function setOrderType($orderType): void
    {
        $this->params['orderType'] = $orderType;
    }

    public function getOrderType()
    {
        return $this->orderType;
    }

    private $newOrderId;

    public function setNewOrderId($newOrderId): void
    {
        $this->params['newOrderId'] = $newOrderId;
    }

    public function getNewOrderId()
    {
        return $this->newOrderId;
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

    private $afsServiceStep;

    public function setAfsServiceStep($afsServiceStep): void
    {
        $this->params['afsServiceStep'] = $afsServiceStep;
    }

    public function getAfsServiceStep()
    {
        return $this->afsServiceStep;
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

    private $pageIndex;

    public function setPageIndex($pageIndex): void
    {
        $this->params['pageIndex'] = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    private $operatorInfoParam;

    public function setOperatorInfoParam($operatorInfoParam): void
    {
        $this->params['operatorInfoParam'] = $operatorInfoParam->getInstance()
        ;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
