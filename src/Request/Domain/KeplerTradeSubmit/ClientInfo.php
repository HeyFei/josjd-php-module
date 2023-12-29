<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerTradeSubmit;

class ClientInfo
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.ClientInfo';
    }

    private $serverName;

    public function setServerName($serverName): void
    {
        $this->params['serverName'] = $serverName;
    }

    public function getServerName()
    {
        return $this->serverName;
    }

    private $userIP;

    public function setUserIP($userIP): void
    {
        $this->params['userIP'] = $userIP;
    }

    public function getUserIP()
    {
        return $this->userIP;
    }

    private $countKey;

    public function setCountKey($countKey): void
    {
        $this->params['countKey'] = $countKey;
    }

    public function getCountKey()
    {
        return $this->countKey;
    }

    private $netBuySourceType;

    public function setNetBuySourceType($netBuySourceType): void
    {
        $this->params['netBuySourceType'] = $netBuySourceType;
    }

    public function getNetBuySourceType()
    {
        return $this->netBuySourceType;
    }

    private $invokeInvoiceBasicService;

    public function setInvokeInvoiceBasicService($invokeInvoiceBasicService): void
    {
        $this->params['invokeInvoiceBasicService'] = $invokeInvoiceBasicService;
    }

    public function getInvokeInvoiceBasicService()
    {
        return $this->invokeInvoiceBasicService;
    }

    private $originId;

    public function setOriginId($originId): void
    {
        $this->params['originId'] = $originId;
    }

    public function getOriginId()
    {
        return $this->originId;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
