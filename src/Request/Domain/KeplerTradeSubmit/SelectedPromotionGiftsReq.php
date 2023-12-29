<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerTradeSubmit;

class SelectedPromotionGiftsReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.SelectedPromotionGiftsReq';
    }

    private $promotionId;

    public function setPromotionId($promotionId): void
    {
        $this->params['promotionId'] = $promotionId;
    }

    public function getPromotionId()
    {
        return $this->promotionId;
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

    private $giftSkuReqList;

    public function setGiftSkuReqList($giftSkuReqList): void
    {
        $size = \count($giftSkuReqList);
        for ($i = 0; $i < $size; ++$i) {
            $giftSkuReqList[$i] = $giftSkuReqList[$i]->getInstance()
            ;
        }
        $this->params['giftSkuReqList'] = $giftSkuReqList;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
