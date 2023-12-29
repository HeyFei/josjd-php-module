<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenExtraDeliverymanValidate;

class DeliverymanReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.extra.delivery.DeliverymanReq';
    }

    private $unionId;

    public function setUnionId($unionId): void
    {
        $this->params['unionId'] = $unionId;
    }

    public function getUnionId()
    {
        return $this->unionId;
    }

    private $mobile;

    public function setMobile($mobile): void
    {
        $this->params['mobile'] = $mobile;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
