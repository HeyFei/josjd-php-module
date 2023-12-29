<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenStatisticsActivityBonusQuery;

class Req
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.statistics.activity.BonusEffectDataReq';
    }

    private $activityId;

    public function setActivityId($activityId): void
    {
        $this->params['activityId'] = $activityId;
    }

    public function getActivityId()
    {
        return $this->activityId;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
