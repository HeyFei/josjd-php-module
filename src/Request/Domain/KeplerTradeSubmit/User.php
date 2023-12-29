<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerTradeSubmit;

class User
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.UserReq';
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

    private $level;

    public function setLevel($level): void
    {
        $this->params['level'] = $level;
    }

    public function getLevel()
    {
        return $this->level;
    }

    private $flagInfo;

    public function setFlagInfo($flagInfo): void
    {
        $this->params['flagInfo'] = $flagInfo;
    }

    public function getFlagInfo()
    {
        return $this->flagInfo;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
