<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenWfpVscMakeCertCallback;

class Data
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.kpl.MakingCertResult';
    }

    private $certList;

    public function setCertList($certList): void
    {
        $size = \count($certList);
        for ($i = 0; $i < $size; ++$i) {
            $certList[$i] = $certList[$i]->getInstance()
            ;
        }
        $this->params['certList'] = $certList;
    }

    private $status;

    public function setStatus($status): void
    {
        $this->params['status'] = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    private $orderId;

    public function setOrderId($orderId): void
    {
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    private $errMsg;

    public function setErrMsg($errMsg): void
    {
        $this->params['errMsg'] = $errMsg;
    }

    public function getErrMsg()
    {
        return $this->errMsg;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
