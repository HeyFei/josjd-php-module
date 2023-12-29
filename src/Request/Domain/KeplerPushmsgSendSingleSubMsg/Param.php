<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerPushmsgSendSingleSubMsg;

class Param
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.k.dto.SubMsgSendDtoJos';
    }

    private $miniProgramState;

    public function setMiniProgramState($miniProgramState): void
    {
        $this->params['miniProgramState'] = $miniProgramState;
    }

    public function getMiniProgramState()
    {
        return $this->miniProgramState;
    }

    private $otherParams;

    public function setOtherParams($otherParams): void
    {
        $this->params['otherParams'] = $otherParams->getInstance()
        ;
    }

    private $appId;

    public function setAppId($appId): void
    {
        $this->params['appId'] = $appId;
    }

    public function getAppId()
    {
        return $this->appId;
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

    private $pin;

    public function setPin($pin): void
    {
        $this->params['pin'] = $pin;
    }

    public function getPin()
    {
        return $this->pin;
    }

    private $businessCode;

    public function setBusinessCode($businessCode): void
    {
        $this->params['businessCode'] = $businessCode;
    }

    public function getBusinessCode()
    {
        return $this->businessCode;
    }

    private $data;

    public function setData($data): void
    {
        $this->params['data'] = $data->getInstance()
        ;
    }

    private $businessId;

    public function setBusinessId($businessId): void
    {
        $this->params['businessId'] = $businessId;
    }

    public function getBusinessId()
    {
        return $this->businessId;
    }

    private $openId;

    public function setOpenId($openId): void
    {
        $this->params['openId'] = $openId;
    }

    public function getOpenId()
    {
        return $this->openId;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
