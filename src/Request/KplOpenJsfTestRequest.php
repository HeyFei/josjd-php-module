<?php

declare(strict_types=1);

namespace LZJos\Request;

class KplOpenJsfTestRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kpl.open.jsf.test';
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

    private $name;

    public function setName($name): void
    {
        $this->apiParas['name'] = $name;
    }

    public function getName()
    {
        return $this->apiParas['name'];
    }

    private $ss;

    public function setSs($ss): void
    {
        $this->apiParas['ss'] = $ss;
    }

    public function getSs()
    {
        return $this->apiParas['ss'];
    }
}
