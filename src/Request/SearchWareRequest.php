<?php

declare(strict_types=1);

namespace LZJos\Request;

class SearchWareRequest
{
    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jingdong.search.ware';
    }

    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return '{}';
        }

        return json_encode($this->apiParas);
    }

    public function check(): void
    {
    }

    public function putOtherTextParam($key, $value): void
    {
        $this->apiParas[$key] = $value;
        $this->{$key} = $value;
    }

    private $version;

    public function setVersion($version): void
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }

    private $key;

    public function setKey($key): void
    {
        $this->key = $key;
        $this->apiParas['key'] = $key;
    }

    public function getKey()
    {
        return $this->key;
    }

    private $filtType;

    public function setFiltType($filtType): void
    {
        $this->filtType = $filtType;
        $this->apiParas['filt_type'] = $filtType;
    }

    public function getFiltType()
    {
        return $this->filtType;
    }

    private $areaIds;

    public function setAreaIds($areaIds): void
    {
        $this->areaIds = $areaIds;
        $this->apiParas['area_ids'] = $areaIds;
    }

    public function getAreaIds()
    {
        return $this->areaIds;
    }

    private $sortType;

    public function setSortType($sortType): void
    {
        $this->sortType = $sortType;
        $this->apiParas['sort_type'] = $sortType;
    }

    public function getSortType()
    {
        return $this->sortType;
    }

    private $page;

    public function setPage($page): void
    {
        $this->page = $page;
        $this->apiParas['page'] = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    private $charset;

    public function setCharset($charset): void
    {
        $this->charset = $charset;
        $this->apiParas['charset'] = $charset;
    }

    public function getCharset()
    {
        return $this->charset;
    }

    private $urlencode;

    public function setUrlencode($urlencode): void
    {
        $this->urlencode = $urlencode;
        $this->apiParas['urlencode'] = $urlencode;
    }

    public function getUrlencode()
    {
        return $this->urlencode;
    }
}
