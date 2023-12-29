<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerPushmsgSaveBatchSubBehaviour;

class Param
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.k.dto.BatchSubBehaviourRecordParam';
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

    private $appid;

    public function setAppid($appid): void
    {
        $this->params['appid'] = $appid;
    }

    public function getAppid()
    {
        return $this->appid;
    }

    private $openid;

    public function setOpenid($openid): void
    {
        $this->params['openid'] = $openid;
    }

    public function getOpenid()
    {
        return $this->openid;
    }

    private $behaviourJsfDtoList;

    public function setBehaviourJsfDtoList($behaviourJsfDtoList): void
    {
        $size = \count($behaviourJsfDtoList);
        for ($i = 0; $i < $size; ++$i) {
            $behaviourJsfDtoList[$i] = $behaviourJsfDtoList[$i]->getInstance()
            ;
        }
        $this->params['behaviourJsfDtoList'] = $behaviourJsfDtoList;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
