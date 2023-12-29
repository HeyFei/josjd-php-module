<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenShopGoodsList;

class GoodsSearchParam
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.marketing.common.client.domain.search.GoodsSearchParam';
    }

    private $shopId;

    public function setShopId($shopId): void
    {
        $this->params['shopId'] = $shopId;
    }

    public function getShopId()
    {
        return $this->shopId;
    }

    private $page;

    public function setPage($page): void
    {
        $this->params['page'] = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    private $sortBy;

    public function setSortBy($sortBy): void
    {
        $this->params['sortBy'] = $sortBy;
    }

    public function getSortBy()
    {
        return $this->sortBy;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
