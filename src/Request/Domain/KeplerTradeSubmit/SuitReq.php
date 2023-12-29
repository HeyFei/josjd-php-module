<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerTradeSubmit;

class SuitReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.SuitReq';
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

    private $num;

    public function setNum($num): void
    {
        $this->params['num'] = $num;
    }

    public function getNum()
    {
        return $this->num;
    }

    private $skuList;

    public function setSkuList($skuList): void
    {
        $size = \count($skuList);
        for ($i = 0; $i < $size; ++$i) {
            $skuList[$i] = $skuList[$i]->getInstance()
            ;
        }
        $this->params['skuList'] = $skuList;
    }

    private $vskuId;

    public function setVskuId($vskuId): void
    {
        $this->params['vskuId'] = $vskuId;
    }

    public function getVskuId()
    {
        return $this->vskuId;
    }

    private $virtualSuitType;

    public function setVirtualSuitType($virtualSuitType): void
    {
        $this->params['virtualSuitType'] = $virtualSuitType;
    }

    public function getVirtualSuitType()
    {
        return $this->virtualSuitType;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
