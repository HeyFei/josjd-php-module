<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenUserPidGet;

class PidReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.user.PidReq';
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

    private $childUnionId;

    public function setChildUnionId($childUnionId): void
    {
        $this->params['childUnionId'] = $childUnionId;
    }

    public function getChildUnionId()
    {
        return $this->childUnionId;
    }

    private $promotionType;

    public function setPromotionType($promotionType): void
    {
        $this->params['promotionType'] = $promotionType;
    }

    public function getPromotionType()
    {
        return $this->promotionType;
    }

    private $positionName;

    public function setPositionName($positionName): void
    {
        $this->params['positionName'] = $positionName;
    }

    public function getPositionName()
    {
        return $this->positionName;
    }

    private $mediaName;

    public function setMediaName($mediaName): void
    {
        $this->params['mediaName'] = $mediaName;
    }

    public function getMediaName()
    {
        return $this->mediaName;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
