<?php

declare(strict_types=1);

namespace LZJos\Request;

class AfterSaleServiceDetailInfoQueryRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'biz.afterSale.serviceDetailInfo.query';
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

    private $afsServiceId;

    public function setAfsServiceId($afsServiceId): void
    {
        $this->apiParas['afsServiceId'] = $afsServiceId;
    }

    public function getAfsServiceId()
    {
        return $this->apiParas['afsServiceId'];
    }

    private $appendInfoSteps;

    public function setAppendInfoSteps($appendInfoSteps): void
    {
        $this->apiParas['appendInfoSteps'] = $appendInfoSteps;
    }

    public function getAppendInfoSteps()
    {
        return $this->apiParas['appendInfoSteps'];
    }
}
