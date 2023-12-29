<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\UnionOpenUserRegisterValidate;

class UserStateReq
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.union.open.gateway.api.dto.user.UserStateReq';
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

    public function getInstance()
    {
        return $this->params;
    }
}
