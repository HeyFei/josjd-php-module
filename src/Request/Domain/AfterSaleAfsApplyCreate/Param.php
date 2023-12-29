<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\AfterSaleAfsApplyCreate;

class Param
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.afs.apply.CreateParamReqVo';
    }

    private $jdOrderId;

    public function setJdOrderId($jdOrderId): void
    {
        $this->params['jdOrderId'] = $jdOrderId;
    }

    public function getJdOrderId()
    {
        return $this->jdOrderId;
    }

    private $customerExpect;

    public function setCustomerExpect($customerExpect): void
    {
        $this->params['customerExpect'] = $customerExpect;
    }

    public function getCustomerExpect()
    {
        return $this->customerExpect;
    }

    private $questionDesc;

    public function setQuestionDesc($questionDesc): void
    {
        $this->params['questionDesc'] = $questionDesc;
    }

    public function getQuestionDesc()
    {
        return $this->questionDesc;
    }

    private $isNeedDetectionReport;

    public function setIsNeedDetectionReport($isNeedDetectionReport): void
    {
        $this->params['isNeedDetectionReport'] = $isNeedDetectionReport;
    }

    public function getIsNeedDetectionReport()
    {
        return $this->isNeedDetectionReport;
    }

    private $questionPic;

    public function setQuestionPic($questionPic): void
    {
        $this->params['questionPic'] = $questionPic;
    }

    public function getQuestionPic()
    {
        return $this->questionPic;
    }

    private $asCustomerDto;

    public function setAsCustomerDto($asCustomerDto): void
    {
        $this->params['asCustomerDto'] = $asCustomerDto->getInstance()
        ;
    }

    private $asPickwareDto;

    public function setAsPickwareDto($asPickwareDto): void
    {
        $this->params['asPickwareDto'] = $asPickwareDto->getInstance()
        ;
    }

    private $asReturnwareDto;

    public function setAsReturnwareDto($asReturnwareDto): void
    {
        $this->params['asReturnwareDto'] = $asReturnwareDto->getInstance()
        ;
    }

    private $asDetailDto;

    public function setAsDetailDto($asDetailDto): void
    {
        $this->params['asDetailDto'] = $asDetailDto->getInstance()
        ;
    }

    private $isHasPackage;

    public function setIsHasPackage($isHasPackage): void
    {
        $this->params['isHasPackage'] = $isHasPackage;
    }

    public function getIsHasPackage()
    {
        return $this->isHasPackage;
    }

    private $packageDesc;

    public function setPackageDesc($packageDesc): void
    {
        $this->params['packageDesc'] = $packageDesc;
    }

    public function getPackageDesc()
    {
        return $this->packageDesc;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
