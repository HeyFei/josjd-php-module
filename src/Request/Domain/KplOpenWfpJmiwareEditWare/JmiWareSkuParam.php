<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenWfpJmiwareEditWare;

class JmiWareSkuParam
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.JmiWareSkuParam';
    }

    private $jSkuId;

    public function setJSkuId($jSkuId): void
    {
        $this->params['jSkuId'] = $jSkuId;
    }

    public function getJSkuId()
    {
        return $this->jSkuId;
    }

    private $jWareId;

    public function setJWareId($jWareId): void
    {
        $this->params['jWareId'] = $jWareId;
    }

    public function getJWareId()
    {
        return $this->jWareId;
    }

    private $outerId;

    public function setOuterId($outerId): void
    {
        $this->params['outerId'] = $outerId;
    }

    public function getOuterId()
    {
        return $this->outerId;
    }

    private $skuPrice;

    public function setSkuPrice($skuPrice): void
    {
        $this->params['skuPrice'] = $skuPrice;
    }

    public function getSkuPrice()
    {
        return $this->skuPrice;
    }

    private $quantity;

    public function setQuantity($quantity): void
    {
        $this->params['quantity'] = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    private $indexOuterId;

    public function setIndexOuterId($indexOuterId): void
    {
        $this->params['indexOuterId'] = $indexOuterId;
    }

    public function getIndexOuterId()
    {
        return $this->indexOuterId;
    }

    private $saleList;

    public function setSaleList($saleList): void
    {
        $size = \count($saleList);
        for ($i = 0; $i < $size; ++$i) {
            $saleList[$i] = $saleList[$i]->getInstance()
            ;
        }
        $this->params['saleList'] = $saleList;
    }

    private $extSetting;

    public function setExtSetting($extSetting): void
    {
        $size = \count($extSetting);
        for ($i = 0; $i < $size; ++$i) {
            $extSetting[$i] = $extSetting[$i]->getInstance()
            ;
        }
        $this->params['extSetting'] = $extSetting;
    }

    private $preStock;

    public function setPreStock($preStock): void
    {
        $this->params['preStock'] = $preStock;
    }

    public function getPreStock()
    {
        return $this->preStock;
    }

    private $mainVideoId;

    public function setMainVideoId($mainVideoId): void
    {
        $this->params['mainVideoId'] = $mainVideoId;
    }

    public function getMainVideoId()
    {
        return $this->mainVideoId;
    }

    private $infoVideoId;

    public function setInfoVideoId($infoVideoId): void
    {
        $this->params['infoVideoId'] = $infoVideoId;
    }

    public function getInfoVideoId()
    {
        return $this->infoVideoId;
    }

    private $mainVideoUrl;

    public function setMainVideoUrl($mainVideoUrl): void
    {
        $this->params['mainVideoUrl'] = $mainVideoUrl;
    }

    public function getMainVideoUrl()
    {
        return $this->mainVideoUrl;
    }

    private $infoVideoUrl;

    public function setInfoVideoUrl($infoVideoUrl): void
    {
        $this->params['infoVideoUrl'] = $infoVideoUrl;
    }

    public function getInfoVideoUrl()
    {
        return $this->infoVideoUrl;
    }

    private $jmiSkuPrices;

    public function setJmiSkuPrices($jmiSkuPrices): void
    {
        $size = \count($jmiSkuPrices);
        for ($i = 0; $i < $size; ++$i) {
            $jmiSkuPrices[$i] = $jmiSkuPrices[$i]->getInstance()
            ;
        }
        $this->params['jmiSkuPrices'] = $jmiSkuPrices;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
