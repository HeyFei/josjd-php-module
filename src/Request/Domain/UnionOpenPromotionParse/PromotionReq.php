<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenPromotionParse;

class PromotionReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.promotion.base.PromotionReq';
    }

    private $promotionUrl;

    public function setPromotionUrl($promotionUrl): void
    {
        $this->params['promotionUrl'] = $promotionUrl;
    }

    public function getPromotionUrl()
    {
        return $this->promotionUrl;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
