<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenPositionCreate;

class PositionReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.position.base.PositionReq';
    }

    private $unionId;

    public function setUnionId($unionId): void
    {
        $this->params['unionId'] = $unionId;
    }

    public function getUnionId()
    {
        return $this->unionId;
    }

    private $key;

    public function setKey($key): void
    {
        $this->params['key'] = $key;
    }

    public function getKey()
    {
        return $this->key;
    }

    private $unionType;

    public function setUnionType($unionType): void
    {
        $this->params['unionType'] = $unionType;
    }

    public function getUnionType()
    {
        return $this->unionType;
    }

    private $type;

    public function setType($type): void
    {
        $this->params['type'] = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    private $spaceNameList;

    public function setSpaceNameList($spaceNameList): void
    {
        $this->params['spaceNameList'] = $spaceNameList;
    }

    public function getSpaceNameList()
    {
        return $this->spaceNameList;
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

    public function getInstance()
    {
        return $this->params;
    }
}
