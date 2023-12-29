<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenPromotionCommonGet;

class PromotionCodeReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.promotion.base.PromotionCodeReq';
    }

    private $materialId;

    public function setMaterialId($materialId): void
    {
        $this->params['materialId'] = $materialId;
    }

    public function getMaterialId()
    {
        return $this->materialId;
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

    private $subUnionId;

    public function setSubUnionId($subUnionId): void
    {
        $this->params['subUnionId'] = $subUnionId;
    }

    public function getSubUnionId()
    {
        return $this->subUnionId;
    }

    private $ext1;

    public function setExt1($ext1): void
    {
        $this->params['ext1'] = $ext1;
    }

    public function getExt1()
    {
        return $this->ext1;
    }

    private $protocol;

    public function setProtocol($protocol): void
    {
        $this->params['protocol'] = $protocol;
    }

    public function getProtocol()
    {
        return $this->protocol;
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

    private $couponUrl;

    public function setCouponUrl($couponUrl): void
    {
        $this->params['couponUrl'] = $couponUrl;
    }

    public function getCouponUrl()
    {
        return $this->couponUrl;
    }

    private $giftCouponKey;

    public function setGiftCouponKey($giftCouponKey): void
    {
        $this->params['giftCouponKey'] = $giftCouponKey;
    }

    public function getGiftCouponKey()
    {
        return $this->giftCouponKey;
    }

    private $channelId;

    public function setChannelId($channelId): void
    {
        $this->params['channelId'] = $channelId;
    }

    public function getChannelId()
    {
        return $this->channelId;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
