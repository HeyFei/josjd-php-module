<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenGoodsSeckillQuery;

class GoodsReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.goods.seckill.SecKillGoodsReq';
    }

    private $skuIds;

    public function setSkuIds($skuIds): void
    {
        $this->params['skuIds'] = $skuIds;
    }

    public function getSkuIds()
    {
        return $this->skuIds;
    }

    private $pageIndex;

    public function setPageIndex($pageIndex): void
    {
        $this->params['pageIndex'] = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    private $pageSize;

    public function setPageSize($pageSize): void
    {
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    private $isBeginSecKill;

    public function setIsBeginSecKill($isBeginSecKill): void
    {
        $this->params['isBeginSecKill'] = $isBeginSecKill;
    }

    public function getIsBeginSecKill()
    {
        return $this->isBeginSecKill;
    }

    private $secKillPriceFrom;

    public function setSecKillPriceFrom($secKillPriceFrom): void
    {
        $this->params['secKillPriceFrom'] = $secKillPriceFrom;
    }

    public function getSecKillPriceFrom()
    {
        return $this->secKillPriceFrom;
    }

    private $secKillPriceTo;

    public function setSecKillPriceTo($secKillPriceTo): void
    {
        $this->params['secKillPriceTo'] = $secKillPriceTo;
    }

    public function getSecKillPriceTo()
    {
        return $this->secKillPriceTo;
    }

    private $cid1;

    public function setCid1($cid1): void
    {
        $this->params['cid1'] = $cid1;
    }

    public function getCid1()
    {
        return $this->cid1;
    }

    private $cid2;

    public function setCid2($cid2): void
    {
        $this->params['cid2'] = $cid2;
    }

    public function getCid2()
    {
        return $this->cid2;
    }

    private $cid3;

    public function setCid3($cid3): void
    {
        $this->params['cid3'] = $cid3;
    }

    public function getCid3()
    {
        return $this->cid3;
    }

    private $owner;

    public function setOwner($owner): void
    {
        $this->params['owner'] = $owner;
    }

    public function getOwner()
    {
        return $this->owner;
    }

    private $commissionShareFrom;

    public function setCommissionShareFrom($commissionShareFrom): void
    {
        $this->params['commissionShareFrom'] = $commissionShareFrom;
    }

    public function getCommissionShareFrom()
    {
        return $this->commissionShareFrom;
    }

    private $commissionShareTo;

    public function setCommissionShareTo($commissionShareTo): void
    {
        $this->params['commissionShareTo'] = $commissionShareTo;
    }

    public function getCommissionShareTo()
    {
        return $this->commissionShareTo;
    }

    private $sortName;

    public function setSortName($sortName): void
    {
        $this->params['sortName'] = $sortName;
    }

    public function getSortName()
    {
        return $this->sortName;
    }

    private $sort;

    public function setSort($sort): void
    {
        $this->params['sort'] = $sort;
    }

    public function getSort()
    {
        return $this->sort;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
