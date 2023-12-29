<?php

declare(strict_types=1);

namespace LZJos\Request;

class KplOpenRegularPlanShipmentorderRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kpl.open.regular.plan.shipmentorder';
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

    private $shipmentParam;

    public function setShipmentParam($shipmentParam): void
    {
        $this->apiParas['shipmentParam'] = $shipmentParam;
    }

    public function getShipmentParam()
    {
        return $this->apiParas['shipmentParam'];
    }
}
