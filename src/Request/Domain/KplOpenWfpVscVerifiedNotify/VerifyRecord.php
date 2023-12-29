<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenWfpVscVerifiedNotify;

class VerifyRecord
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.VerifyRecord';
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

    private $verifyingTimes;

    public function setVerifyingTimes($verifyingTimes): void
    {
        $this->params['verifyingTimes'] = $verifyingTimes;
    }

    public function getVerifyingTimes()
    {
        return $this->verifyingTimes;
    }

    private $mobile;

    public function setMobile($mobile): void
    {
        $this->params['mobile'] = $mobile;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    private $operator;

    public function setOperator($operator): void
    {
        $this->params['operator'] = $operator;
    }

    public function getOperator()
    {
        return $this->operator;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
