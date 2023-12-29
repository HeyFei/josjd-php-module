<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerPushmsgSendBatchMsg;

class Param
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.k.dto.SubMsgSendBatchDtoJos';
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

    private $bCode;

    public function setBCode($bCode): void
    {
        $this->params['bCode'] = $bCode;
    }

    public function getBCode()
    {
        return $this->bCode;
    }

    private $data;

    public function setData($data): void
    {
        $this->params['data'] = $data->getInstance()
        ;
    }

    private $bId;

    public function setBId($bId): void
    {
        $this->params['bId'] = $bId;
    }

    public function getBId()
    {
        return $this->bId;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
