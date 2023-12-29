<?php

declare(strict_types=1);

namespace LZJos\Request;

class KplOpenWfpVscLegalOrderRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kpl.open.wfp.vsc.legalOrder';
    }

    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return '{}';
        }

        return json_encode($this->apiParas);
    }

    public function check(): void
    {
    }

    public function putOtherTextParam($key, $value): void
    {
        $this->apiParas[$key] = $value;
        $this->{$key} = $value;
    }

    private $version;

    public function setVersion($version): void
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }

    private $interfaceName;

    public function setInterfaceName($interfaceName): void
    {
        $this->apiParas['interfaceName'] = $interfaceName;
    }

    public function getInterfaceName()
    {
        return $this->apiParas['interfaceName'];
    }

    private $methodName;

    public function setMethodName($methodName): void
    {
        $this->apiParas['methodName'] = $methodName;
    }

    public function getMethodName()
    {
        return $this->apiParas['methodName'];
    }

    private $param;

    public function setParam($param): void
    {
        $this->apiParas['param'] = $param;
    }

    public function getParam()
    {
        return $this->apiParas['param'];
    }
}
