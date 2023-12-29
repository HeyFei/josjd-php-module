<?php

declare(strict_types=1);

namespace LZJos\Request;

class KplOpenRegularPlanCancleplanRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kpl.open.regular.plan.cancleplan';
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

    private $venderId;

    public function setVenderId($venderId): void
    {
        $this->apiParas['venderId'] = $venderId;
    }

    public function getVenderId()
    {
        return $this->apiParas['venderId'];
    }

    private $planId;

    public function setPlanId($planId): void
    {
        $this->apiParas['planId'] = $planId;
    }

    public function getPlanId()
    {
        return $this->apiParas['planId'];
    }
}
