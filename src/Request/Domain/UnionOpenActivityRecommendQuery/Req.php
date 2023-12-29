<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenActivityRecommendQuery;

class Req
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.activity.recommend.RecommendActivityReq';
    }

    private $userId;

    public function setUserId($userId): void
    {
        $this->params['userId'] = $userId;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    private $userIdType;

    public function setUserIdType($userIdType): void
    {
        $this->params['userIdType'] = $userIdType;
    }

    public function getUserIdType()
    {
        return $this->userIdType;
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

    private $pid;

    public function setPid($pid): void
    {
        $this->params['pid'] = $pid;
    }

    public function getPid()
    {
        return $this->pid;
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

    private $siteId;

    public function setSiteId($siteId): void
    {
        $this->params['siteId'] = $siteId;
    }

    public function getSiteId()
    {
        return $this->siteId;
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

    private $needClickUrl;

    public function setNeedClickUrl($needClickUrl): void
    {
        $this->params['needClickUrl'] = $needClickUrl;
    }

    public function getNeedClickUrl()
    {
        return $this->needClickUrl;
    }

    private $imageWidth;

    public function setImageWidth($imageWidth): void
    {
        $this->params['imageWidth'] = $imageWidth;
    }

    public function getImageWidth()
    {
        return $this->imageWidth;
    }

    private $imageHeight;

    public function setImageHeight($imageHeight): void
    {
        $this->params['imageHeight'] = $imageHeight;
    }

    public function getImageHeight()
    {
        return $this->imageHeight;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
