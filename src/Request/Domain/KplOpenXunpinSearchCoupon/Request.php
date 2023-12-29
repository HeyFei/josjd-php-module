<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenXunpinSearchCoupon;

class Request
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'java.util.Map';
    }

    private $key;

    public function setKey($key): void
    {
        $this->params['key'] = $key;
    }

    public function getKey()
    {
        return $this->key;
    }

    private $value;

    public function setValue($value): void
    {
        $this->params['value'] = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
