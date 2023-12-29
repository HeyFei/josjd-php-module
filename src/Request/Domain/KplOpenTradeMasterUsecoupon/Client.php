<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenTradeMasterUsecoupon;

class Client
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kepler.trade.sdk.export.master.base.domain.ClientDomain';
    }

    private $uid;

    public function setUid($uid): void
    {
        $this->params['uid'] = $uid;
    }

    public function getUid()
    {
        return $this->uid;
    }

    private $userIp;

    public function setUserIp($userIp): void
    {
        $this->params['userIp'] = $userIp;
    }

    public function getUserIp()
    {
        return $this->userIp;
    }

    private $clientFlow;

    public function setClientFlow($clientFlow): void
    {
        $this->params['clientFlow'] = $clientFlow;
    }

    public function getClientFlow()
    {
        return $this->clientFlow;
    }

    private $logId;

    public function setLogId($logId): void
    {
        $this->params['logId'] = $logId;
    }

    public function getLogId()
    {
        return $this->logId;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
