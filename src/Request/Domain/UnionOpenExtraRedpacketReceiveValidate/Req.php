<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenExtraRedpacketReceiveValidate;

class Req
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.extra.redpacket.ReceiveRedpacketReq';
    }

    private $userId;

    public function setUserId($userId): void
    {
        $this->params['userId'] = $userId;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    private $userIdType;

    public function setUserIdType($userIdType): void
    {
        $this->params['userIdType'] = $userIdType;
    }

    public function getUserIdType()
    {
        return $this->userIdType;
    }

    private $actId;

    public function setActId($actId): void
    {
        $this->params['actId'] = $actId;
    }

    public function getActId()
    {
        return $this->actId;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
