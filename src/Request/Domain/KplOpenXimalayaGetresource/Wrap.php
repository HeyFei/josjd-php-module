<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenXimalayaGetresource;

class Wrap
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'com.jd.smart.zny.broker.open.wrap.XiMaLaYaRequestWrap';
    }

    private $requestURI;

    public function setRequestURI($requestURI): void
    {
        $this->params['requestURI'] = $requestURI;
    }

    public function getRequestURI()
    {
        return $this->requestURI;
    }

    private $requestMethod;

    public function setRequestMethod($requestMethod): void
    {
        $this->params['requestMethod'] = $requestMethod;
    }

    public function getRequestMethod()
    {
        return $this->requestMethod;
    }

    private $requestQueryString;

    public function setRequestQueryString($requestQueryString): void
    {
        $this->params['requestQueryString'] = $requestQueryString;
    }

    public function getRequestQueryString()
    {
        return $this->requestQueryString;
    }

    private $requestParameterMap;

    public function setRequestParameterMap($requestParameterMap): void
    {
        $this->params['requestParameterMap'] = $requestParameterMap;
    }

    public function getRequestParameterMap()
    {
        return $this->requestParameterMap;
    }

    private $timestamp;

    public function setTimestamp($timestamp): void
    {
        $this->params['timestamp'] = $timestamp;
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
