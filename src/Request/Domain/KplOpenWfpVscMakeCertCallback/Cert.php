<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenWfpVscMakeCertCallback;

class Cert
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.Cert';
    }

    private $certId;

    public function setCertId($certId): void
    {
        $this->params['certId'] = $certId;
    }

    public function getCertId()
    {
        return $this->certId;
    }

    private $cardNum;

    public function setCardNum($cardNum): void
    {
        $this->params['cardNum'] = $cardNum;
    }

    public function getCardNum()
    {
        return $this->cardNum;
    }

    private $pwd;

    public function setPwd($pwd): void
    {
        $this->params['pwd'] = $pwd;
    }

    public function getPwd()
    {
        return $this->pwd;
    }

    private $effectiveTime;

    public function setEffectiveTime($effectiveTime): void
    {
        $this->params['effectiveTime'] = $effectiveTime;
    }

    public function getEffectiveTime()
    {
        return $this->effectiveTime;
    }

    private $expiryTime;

    public function setExpiryTime($expiryTime): void
    {
        $this->params['expiryTime'] = $expiryTime;
    }

    public function getExpiryTime()
    {
        return $this->expiryTime;
    }

    private $leftTimes;

    public function setLeftTimes($leftTimes): void
    {
        $this->params['leftTimes'] = $leftTimes;
    }

    public function getLeftTimes()
    {
        return $this->leftTimes;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
