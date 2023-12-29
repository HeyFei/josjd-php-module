<?php

declare(strict_types=1);

namespace LZJos\Request\Domain\KplOpenWfpJmiwareAddWare;

class Param
{
    private $params = [];

    public function __construct()
    {
        $this->params['@type'] = 'java.util.Map';
    }

    private $jmiWareParam;

    public function setJmiWareParam($jmiWareParam): void
    {
        $this->params['jmiWareParam'] = $jmiWareParam->getInstance()
        ;
    }

    public function getInstance()
    {
        return $this->params;
    }
}
