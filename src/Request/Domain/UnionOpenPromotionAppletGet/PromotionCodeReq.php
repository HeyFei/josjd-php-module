<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenPromotionAppletGet;

class PromotionCodeReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.promotion.applet.PromotionCodeAppletReq';
    }

    private $type;

    public function setType($type): void
    {
        $this->params['type'] = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    private $subUnionId;

    public function setSubUnionId($subUnionId): void
    {
        $this->params['subUnionId'] = $subUnionId;
    }

    public function getSubUnionId()
    {
        return $this->subUnionId;
    }

    private $positionId;

    public function setPositionId($positionId): void
    {
        $this->params['positionId'] = $positionId;
    }

    public function getPositionId()
    {
        return $this->positionId;
    }

    private $pid;

    public function setPid($pid): void
    {
        $this->params['pid'] = $pid;
    }

    public function getPid()
    {
        return $this->pid;
    }

    private $activityType;

    public function setActivityType($activityType): void
    {
        $this->params['activityType'] = $activityType;
    }

    public function getActivityType()
    {
        return $this->activityType;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
