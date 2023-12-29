<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerPushmsgCreateSubSendTask;

class Param
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.k.dto.SubSendTaskParamJos';
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

    private $contentData;

    public function setContentData($contentData): void
    {
        $this->params['contentData'] = $contentData->getInstance()
        ;
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

    private $otherParamsData;

    public function setOtherParamsData($otherParamsData): void
    {
        $this->params['otherParamsData'] = $otherParamsData->getInstance()
        ;
    }

    private $sendTime;

    public function setSendTime($sendTime): void
    {
        $this->params['sendTime'] = $sendTime;
    }

    public function getSendTime()
    {
        return $this->sendTime;
    }

    private $sendType;

    public function setSendType($sendType): void
    {
        $this->params['sendType'] = $sendType;
    }

    public function getSendType()
    {
        return $this->sendType;
    }

    private $jumpPage;

    public function setJumpPage($jumpPage): void
    {
        $this->params['jumpPage'] = $jumpPage;
    }

    public function getJumpPage()
    {
        return $this->jumpPage;
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

    private $miniprogramState;

    public function setMiniprogramState($miniprogramState): void
    {
        $this->params['miniprogramState'] = $miniprogramState;
    }

    public function getMiniprogramState()
    {
        return $this->miniprogramState;
    }

    private $channel;

    public function setChannel($channel): void
    {
        $this->params['channel'] = $channel;
    }

    public function getChannel()
    {
        return $this->channel;
    }

    private $taskName;

    public function setTaskName($taskName): void
    {
        $this->params['taskName'] = $taskName;
    }

    public function getTaskName()
    {
        return $this->taskName;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
