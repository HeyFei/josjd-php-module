<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerTradeSubmit;

class SkuReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.SkuReq';
    }

    private $sku;

    public function setSku($sku): void
    {
        $this->params['sku'] = $sku;
    }

    public function getSku()
    {
        return $this->sku;
    }

    private $num;

    public function setNum($num): void
    {
        $this->params['num'] = $num;
    }

    public function getNum()
    {
        return $this->num;
    }

    private $name;

    public function setName($name): void
    {
        $this->params['name'] = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    private $tagList;

    public function setTagList($tagList): void
    {
        $this->params['tagList'] = $tagList;
    }

    public function getTagList()
    {
        return $this->tagList;
    }

    private $selectedPromoIdList;

    public function setSelectedPromoIdList($selectedPromoIdList): void
    {
        $this->params['selectedPromoIdList'] = $selectedPromoIdList;
    }

    public function getSelectedPromoIdList()
    {
        return $this->selectedPromoIdList;
    }

    private $thirdCategoryId;

    public function setThirdCategoryId($thirdCategoryId): void
    {
        $this->params['thirdCategoryId'] = $thirdCategoryId;
    }

    public function getThirdCategoryId()
    {
        return $this->thirdCategoryId;
    }

    private $vendor;

    public function setVendor($vendor): void
    {
        $this->params['vendor'] = $vendor;
    }

    public function getVendor()
    {
        return $this->vendor;
    }

    private $vendorType;

    public function setVendorType($vendorType): void
    {
        $this->params['vendorType'] = $vendorType;
    }

    public function getVendorType()
    {
        return $this->vendorType;
    }

    private $giftSkuRequestList;

    public function setGiftSkuRequestList($giftSkuRequestList): void
    {
        $size = \count($giftSkuRequestList);
        for ($i = 0; $i < $size; ++$i) {
            $giftSkuRequestList[$i] = $giftSkuRequestList[$i]->getInstance()
            ;
        }
        $this->params['giftSkuRequestList'] = $giftSkuRequestList;
    }

    private $skuExtentionReq;

    public function setSkuExtentionReq($skuExtentionReq): void
    {
        $this->params['skuExtentionReq'] = $skuExtentionReq->getInstance()
        ;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
