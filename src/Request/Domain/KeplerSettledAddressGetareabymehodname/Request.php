<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KeplerSettledAddressGetareabymehodname;

class Request
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.trade.jos.sopclient.address.request.GetAreaByMehodNameRequest';
    }

    private $param;

    public function setParam($param): void
    {
        $this->params['param'] = $param;
    }

    public function getParam()
    {
        return $this->param;
    }

    private $methodName;

    public function setMethodName($methodName): void
    {
        $this->params['methodName'] = $methodName;
    }

    public function getMethodName()
    {
        return $this->methodName;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
